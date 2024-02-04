<?php

namespace App\Controller;

use App\Entity\BonReception;
use App\Entity\Immobilisation;
use App\Entity\ImmobilisationPermission;
use App\Form\ImmobilisationPermissionType;
use App\Repository\ArticleRepository;
use App\Repository\BonReceptionRepository;
use App\Repository\DemandeDepartementRepository;
use App\Repository\EmployeRepository;
use App\Repository\ImmobilisationPermissionRepository;
use App\Repository\ImmobilisationRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/immobilisation/permission')]
class ImmobilisationPermissionController extends AbstractController
{
    #[Route('/', name: 'app_immobilisation_permission_index', methods: ['GET'])]
    public function index(ImmobilisationPermissionRepository $immobilisationPermissionRepository): Response
    {
        return $this->render('immobilisation_permission/index.html.twig', [
            'immobilisation_permissions' => $immobilisationPermissionRepository->findAll(),
        ]);
    }

    #[Route('/new/{id}', name: 'app_immobilisation_permission_new', methods: ['GET', 'POST'])]
    public function new(Immobilisation $immobilisation, Request $request, EntityManagerInterface $entityManager, EmployeRepository $employeRepository): Response
    {
        $immobilisationPermission = new ImmobilisationPermission();
        $form = $this->createForm(ImmobilisationPermissionType::class, $immobilisationPermission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $immobilisationPermission->setImmobilisation($immobilisation);
            // Etat = 5 => neutre de 0 refuse et 10 accepted
            $immobilisationPermission->setEtat(5);

            $employe = $employeRepository->findOneByUtilisateur($this->getUser()->getId());
            $immobilisationPermission->setEmploye($employe);

            $entityManager->persist($immobilisationPermission);
            $entityManager->flush();

            return $this->redirectToRoute('app_immobilisation_disponible', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('immobilisation_permission/new.html.twig', [
            'immobilisation_permission' => $immobilisationPermission,
            'form' => $form,
            'immobilisation' => $immobilisation
        ]);
    }

    #[Route('/{id}', name: 'app_immobilisation_permission_show', methods: ['GET'])]
    public function show(ImmobilisationPermission $immobilisationPermission): Response
    {
        return $this->render('immobilisation_permission/show.html.twig', [
            'immobilisation_permission' => $immobilisationPermission,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_immobilisation_permission_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ImmobilisationPermission $immobilisationPermission, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ImmobilisationPermissionType::class, $immobilisationPermission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_immobilisation_permission_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('immobilisation_permission/edit.html.twig', [
            'immobilisation_permission' => $immobilisationPermission,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_immobilisation_permission_delete', methods: ['POST'])]
    public function delete(Request $request, ImmobilisationPermission $immobilisationPermission, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$immobilisationPermission->getId(), $request->request->get('_token'))) {
            $entityManager->remove($immobilisationPermission);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_immobilisation_permission_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/demande/disponible', name:'app_immobilisation_disponible')]
    public function demandeDisponible(EmployeRepository $employeRepository, EntityManagerInterface $entityManager, ArticleRepository $articleRepository, BonReceptionRepository $bonReceptionRepository) : Response
    {

        $employe = $employeRepository->findOneByUtilisateur($this->getUser()->getId());
        $immobilisations = $employe->getService()->getImmobilisationDemandes($entityManager, $articleRepository, $bonReceptionRepository);

        return $this->render("immobilisation_permission/liste_disponible.html.twig", [
            'immobilisations' => $immobilisations
        ]);
    }

    #[IsGranted("ROLE_ADMIN_DEPARTEMENT", statusCode:404, message:"Error 404 Page not found")]
    #[Route('/demande/employes', name:'app_employe_demande_immobilisation')]
    public function getDemandeImmobilisationEmploye(EntityManagerInterface $entityManager, UtilisateurRepository $utilisateurRepository, ImmobilisationRepository $immobilisationRepository, EmployeRepository $employeRepository):Response
    {

        $employe = $employeRepository->findOneByUtilisateur($this->getUser()->getId());
        $immobilisations = $employe->getDemandeImmobilisationEmployee($entityManager, $immobilisationRepository, $utilisateurRepository, $employeRepository);

        return $this->render("immobilisation_permission/demande_employe.html.twig",[
            'immobilisationsPermission' => $immobilisations
        ]);
    }

    #[IsGranted("ROLE_ADMIN_DEPARTEMENT", statusCode:404, message:"Error 404 Page not found")]
    #[Route('/demande/employes/accepter/{id}', name:'app_immobilisation_permission_accepter')]
    public function accepterDemandeImmobilisationEmploye(ImmobilisationPermission $immobilisationPermission, EntityManagerInterface $entityManager, UtilisateurRepository $utilisateurRepository, ImmobilisationRepository $immobilisationRepository, EmployeRepository $employeRepository):Response
    {

        $employe = $employeRepository->findOneByUtilisateur($this->getUser()->getId());
        $immobilisations = $employe->getDemandeImmobilisationEmployee($entityManager, $immobilisationRepository, $utilisateurRepository, $employeRepository);
        $immobilisationPermission->setEtat(10);

        if($immobilisationPermission->getImmobilisation()->getEtatAvance() < 10){
            $immobilisationPermission->getImmobilisation()->setEtatAvance(10);
            $entityManager->persist($immobilisationPermission->getImmobilisation());
        }

        $entityManager->persist($immobilisationPermission);
        $entityManager->flush();

        return $this->render("immobilisation_permission/demande_employe.html.twig",[
            'immobilisationsPermission' => $immobilisations
        ]);
    }

    #[IsGranted("ROLE_ADMIN_DEPARTEMENT", statusCode:404, message:"Error 404 Page not found")]
    #[Route('/demande/employes/refuser/{id}', name:'app_immobilisation_permission_refuser')]
    public function refuserDemandeImmobilisationEmploye(ImmobilisationPermission $immobilisationPermission, EntityManagerInterface $entityManager, UtilisateurRepository $utilisateurRepository, ImmobilisationRepository $immobilisationRepository, EmployeRepository $employeRepository):Response
    {

        $employe = $employeRepository->findOneByUtilisateur($this->getUser()->getId());
        $immobilisations = $employe->getDemandeImmobilisationEmployee($entityManager, $immobilisationRepository, $utilisateurRepository, $employeRepository);
        $immobilisationPermission->setEtat(0);

        $entityManager->persist($immobilisationPermission);
        $entityManager->flush();

        return $this->render("immobilisation_permission/demande_employe.html.twig",[
            'immobilisationsPermission' => $immobilisations
        ]);
    }

}
