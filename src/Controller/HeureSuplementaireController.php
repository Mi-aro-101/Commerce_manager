<?php

namespace App\Controller;

use App\Entity\HeureSuplementaire;
use App\Form\HeureSuplementaireType;
use App\Repository\EmployeRepository;
use App\Repository\HeureSuplementaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/heure/suplementaire')]
class HeureSuplementaireController extends AbstractController
{
    #[Route('/', name: 'app_heure_suplementaire_index', methods: ['GET'])]
    public function index(HeureSuplementaireRepository $heureSuplementaireRepository): Response
    {
        return $this->render('heure_suplementaire/index.html.twig', [
            'heure_suplementaires' => $heureSuplementaireRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_heure_suplementaire_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, EmployeRepository $employeRepository): Response
    {
        $heureSuplementaire = new HeureSuplementaire();

        $user = $this->getUser();
        $employe = $employeRepository->findOneByUtilisateur($user->getId());
        $heureSuplementaire->setEmploye($employe);
        $heureSuplementaire->setStatut(5);

        $form = $this->createForm(HeureSuplementaireType::class, $heureSuplementaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if($employe->getDateEmbauche() > $heureSuplementaire->getDate()){
                throw new AccessDeniedException("Date invalide");
            }

            $entityManager->persist($heureSuplementaire);
            $entityManager->flush();

            return $this->redirectToRoute('app_heure_suplementaire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('heure_suplementaire/new.html.twig', [
            'heure_suplementaire' => $heureSuplementaire,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_heure_suplementaire_show', methods: ['GET'])]
    public function show(HeureSuplementaire $heureSuplementaire): Response
    {
        return $this->render('heure_suplementaire/show.html.twig', [
            'heure_suplementaire' => $heureSuplementaire,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_heure_suplementaire_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, HeureSuplementaire $heureSuplementaire, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HeureSuplementaireType::class, $heureSuplementaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_heure_suplementaire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('heure_suplementaire/edit.html.twig', [
            'heure_suplementaire' => $heureSuplementaire,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_heure_suplementaire_delete', methods: ['POST'])]
    public function delete(Request $request, HeureSuplementaire $heureSuplementaire, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$heureSuplementaire->getId(), $request->request->get('_token'))) {
            $entityManager->remove($heureSuplementaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_heure_suplementaire_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/employe/heuresup', name: 'app_heure_suplementaire_employe')]
    public function heureSupEmploye(EmployeRepository $employeRepository, HeureSuplementaireRepository $heureSuplementaireRepository): Response
    {
        $heuresup = [];

        $user = $this->getUser();
        $me = $employeRepository->findOneByUtilisateur($user->getId());

        $employes = $employeRepository->findBy(
            [
                'superieur' => strval($me->getId()),
            ]
        );

        $heuresup = $this->getHeureSupEmploye($employes, $heureSuplementaireRepository);

        return $this->render('heure_suplementaire/employe.html.twig', [
            'employe' => $employes,
            'heuresups' => $heuresup,
        ]);
    }

    /**
     * Put all heure suplementaire of all my employes
     */
    public function getHeureSupEmploye($employes, $heureSuplementaireRepository): array
    {
        $results = [];

        foreach($employes as $employe){
            $heuresups = $heureSuplementaireRepository->findBy(
                [
                    'employe' => strval($employe->getId()),
                    'statut' => 5
                ]
            );
            $results = array_merge($results, $heuresups);
        }

        return $results;
    }

    /**
     * Accepter demande de heure sup
     */
    #[Route('/accepter/{id}', name: 'app_accepter_heure_sup', methods: ['GET', 'POST'])]
    public function accepter(int $id, HeureSuplementaireRepository $heureSuplementaireRepository, EntityManagerInterface $entityManager)
    {
        $heuresup = $heureSuplementaireRepository->find($id);
        $heuresup->setStatut(10);

        $entityManager->flush();

        return $this->redirectToRoute('app_heure_suplementaire_employe', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * Refuser demande de heure sup
     */
    #[Route('/refuser/{id}', name: 'app_refuser_heure_sup', methods: ['GET', 'POST'])]
    public function refuser(int $id, HeureSuplementaireRepository $heureSuplementaireRepository, EntityManagerInterface $entityManager)
    {
        $heuresup = $heureSuplementaireRepository->find($id);
        $heuresup->setStatut(0);

        $entityManager->flush();

        return $this->redirectToRoute('app_heure_suplementaire_employe', [], Response::HTTP_SEE_OTHER);
    }
}
