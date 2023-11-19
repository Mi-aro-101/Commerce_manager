<?php

namespace App\Controller;

use App\Entity\Conge;
use App\Form\CongeType;
use App\Repository\CongeRepository;
use App\Repository\EmployeRepository;
use DateInterval;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;


#[Route('/conge')]
class CongeController extends AbstractController
{
    #[Route('/', name: 'app_conge_index', methods: ['GET'])]
    public function index(CongeRepository $congeRepository): Response
    {
        return $this->render('conge/index.html.twig', [
            'conges' => $congeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_conge_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, EmployeRepository $employeRepository): Response
    {
        $conge = new Conge();

        $user = $this->getUser();
        $employe = $employeRepository->findOneByUtilisateur($user->getId());
        // Set conge statut to 5 so that the demand will pass through his superior then to RH
        $conge->setStatut(5);
        if($employe->getSuperieur() == null){
            // If this employe do not have superior, the demand will go directly to RH, the statut is almost okay (10)
            $conge->setStatut(7);
        }

        $conge->setEmploye($employe);

        $form = $this->createForm(CongeType::class, $conge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if($conge->getDateDebut() > $conge->getDateFin()){
                throw $this->createAccessDeniedException('Date de debut et fin invalide');
            }

            if($conge->getDateDebut() < $conge->getEmploye()->getDateEmbauche()){
                throw $this->createAccessDeniedException('Date invalide, conge avant date embauche');
            }

            if($conge->getDateDebut() < $conge->getEmploye()->getDateEmbauche()->add(new DateInterval('P1Y')) ){
                throw $this->createAccessDeniedException("Vous ne pouvez pas demander un conge avant au moins un an de travail");
            }

            $entityManager->persist($conge);
            $entityManager->flush();

            return $this->redirectToRoute('app_conge_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('conge/new.html.twig', [
            'conge' => $conge,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_conge_show', methods: ['GET'])]
    public function show(Conge $conge): Response
    {
        return $this->render('conge/show.html.twig', [
            'conge' => $conge,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_conge_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Conge $conge, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CongeType::class, $conge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_conge_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('conge/edit.html.twig', [
            'conge' => $conge,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_conge_delete', methods: ['POST'])]
    public function delete(Request $request, Conge $conge, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$conge->getId(), $request->request->get('_token'))) {
            $entityManager->remove($conge);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_conge_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/mes/employes', name: 'employe_conge')]
    public function congeMesEmployes(EmployeRepository $employeRepository, CongeRepository $congeRepository): Response
    {
        // retrieve employe of this user
        $user = $this->getUser();
        $myemp = $employeRepository->findOneByUtilisateur($user->getId());

        $employes = $employeRepository->findBy(
            [
                'superieur' => strval($myemp->getId()),
            ]
        );

        //Retrieve all demand of conge of all employes
        $conges = $this->getCongesEmployes($employes, $congeRepository);

        return $this->render('conge/view_emp_conge.html.twig', [
            'conges' => $conges
        ]);
    }

    #[Route('/calendrier/employes', name: 'app_conge_calendrier')]
    public function voirCalendrier(EmployeRepository $employeRepository, CongeRepository $congeRepository): Response
    {

        // retrieve employe of this user
        $user = $this->getUser();
        $myemp = $employeRepository->findOneByUtilisateur($user->getId());

        $employes = $employeRepository->findBy(
            [
                'superieur' => strval($myemp->getId()),
            ]
        );

        //Retrieve all demand of conge of all employes
        $conges = $this->getCongesEmployesAccepte($employes, $congeRepository);

        return $this->render('conge/calendrier.html.twig', [
            'conges' => $conges,
        ]);
    }

    /**
     * @return array of all conges of all employees
     */
    public function getCongesEmployes($employes, $congeRepository) : array
    {
        $results = array();

        foreach($employes as $employe){
            $conges = $congeRepository->findBy(
                [
                    'employe' => strval($employe->getId()),
                    'statut' => 5
                ]
            );
            $results = array_merge($results, $conges);
        }

        return $results;
    }

    /**
     * @return array of all conges of all employees that has been truly accepted
     */
    public function getCongesEmployesAccepte($employes, $congeRepository) : array
    {
        $results = array();

        foreach($employes as $employe){
            $conges = $congeRepository->findBy(
                [
                    'employe' => strval($employe->getId()),
                    'statut' => 10
                ]
            );
            $results = array_merge($results, $conges);
        }

        return $results;
    }

    /**
     * Accepter conge (niveau 2)
     */
    #[Route('/accepter/{idconge}', name: 'app_conge_accepter', methods: ['GET', 'POST'])]
    public function accepter(int $idconge, CongeRepository $congeRepository, EntityManagerInterface $entityManager)
    {
        $conge = $congeRepository->find($idconge);
        $conge->setStatut(7);

        $entityManager->flush();

        return $this->redirectToRoute('employe_conge', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * Refuser conge (niveau 2)
     */
    #[Route('/refuser/{idconge}', name: 'app_conge_refuser', methods: ['GET', 'POST'])]
    public function refuser(int $idconge, CongeRepository $congeRepository, EntityManagerInterface $entityManager)
    {
        $conge = $congeRepository->find($idconge);
        $conge->setStatut(0);

        $entityManager->flush();

        return $this->redirectToRoute('employe_conge', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * Accepter conge (niveau 3)
     */
    #[Route('/rh/accepter/{idconge}', name: 'app_conge_accepter_rh', methods: ['GET', 'POST'])]
    public function accepter2(int $idconge, CongeRepository $congeRepository, EntityManagerInterface $entityManager)
    {
        $conge = $congeRepository->find($idconge);
        $conge->setStatut(10);

        $entityManager->flush();

        return $this->redirectToRoute('app_conge_all_employes', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * display all demandes de conge accepter par superieur
     */
    #[Route('/all/employes', name: 'app_conge_all_employes')]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function congeAllEMployes(CongeRepository $congeRepository): Response
    {
        $conges = $congeRepository->findBy(
            [
                'statut' => 7
            ]
        );

        $congeRestants = [];
        $congeRestants = $this->getCongeRestant($conges, $congeRepository);

        return $this->render('conge/view_emp_conge_rh.html.twig', [
            'conges' => $conges,
            'restes' => $congeRestants
        ]);
    }

    /**
     * Get conge restants of all conge that have statut 7 and display them to rh
     */
    public function getCongeRestant($conges, CongeRepository $congeRepository): array
    {
        $results = array();

        foreach($conges as $conge){
            $congeReste = $conge->getResteCongeTotal();
            $totalCongeFaites = $this->getCongeFaites($conge, $congeRepository);
            $val = $congeReste - $totalCongeFaites;
            if($val >= 90){
                $val = 90;
            }
            array_push($results, $val);
        }

        return $results;
    }

    public function getCongeFaites($conge, CongeRepository $congeRepository): int
    {
        $congefaites = $congeRepository->findBy(
            [
                'employe' => strval($conge->getEmploye()->getId()),
                'statut' => 10
            ]
        );

        $durees = $this->getDureeConge($congefaites);

        return array_sum($durees);

    }

    public function getDureeConge($conges): array
    {
        $results = [];
        $i = 0;
        foreach($conges as $conge){
            $results[$i] = $conge->getDureeEnJour();
            $i++;
        }

        return $results;
    }
}
