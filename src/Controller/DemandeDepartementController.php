<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Entity\DemandeDepartement;
use App\Form\DemandeDepartementType;
use App\Repository\ArticleFournisseurRepository;
use App\Repository\ArticleRepository;
use App\Repository\DemandeDepartementRepository;
use App\Repository\DemandeRepository;
use App\Repository\EmployeRepository;
use App\Repository\ServiceRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/demande/departement')]
class DemandeDepartementController extends AbstractController
{

    #[Route('/details', name: 'app_demande_departement_detail', methods: ['GET'])]
    public function details(EntityManagerInterface $entityManager,ArticleRepository $articleRepository,ServiceRepository $serviceRepository): Response
    {
        $id_article = $_GET['id'];
        $connection = $entityManager->getConnection();
        $demandeDepartement = new DemandeDepartement();
        $demandeDepartement =  $demandeDepartement -> getArticleNonTraiteDetails($connection,$id_article,$articleRepository,$serviceRepository);
        // $article = $articleRepository -> find($id_article);
        return $this->render('demande_departement/details_demandes.html.twig', [
            'demandesDepartements' => $demandeDepartement,
        ]);
    }
    
    #[Route('/', name: 'app_demande_departement_index', methods: ['GET'])]
    public function index(DemandeDepartementRepository $demandeDepartementRepository): Response
    {
        return $this->render('demande_departement/index.html.twig', [
            'demande_departements' => $demandeDepartementRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_demande_departement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,UtilisateurRepository $utilisateurRepository,EmployeRepository $employeRepository): Response
    {   
        //get the user
        $user_session = $this->getUser();
        $user = $utilisateurRepository->find($user_session);

        //get the employe object reliate to this user 
        $employe = $employeRepository->findOneByUtilisateur($user);
        $service = $employe-> getService();
        
        $demandeDepartement = new DemandeDepartement();

        $demandeDepartement -> setStatut(1);
        $demandeDepartement -> setService($service);
        $form = $this->createForm(DemandeDepartementType::class, $demandeDepartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($demandeDepartement);
            $entityManager->flush();

            return $this->redirectToRoute('app_demande_departement_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('demande_departement/new.html.twig', [
            'demande_departement' => $demandeDepartement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_demande_departement_show', methods: ['GET'])]
    public function show(DemandeDepartement $demandeDepartement): Response
    {
        return $this->render('demande_departement/show.html.twig', [
            'demande_departement' => $demandeDepartement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_demande_departement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, DemandeDepartement $demandeDepartement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DemandeDepartementType::class, $demandeDepartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_demande_departement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('demande_departement/edit.html.twig', [
            'demande_departement' => $demandeDepartement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_demande_departement_delete', methods: ['POST'])]
    public function delete(Request $request, DemandeDepartement $demandeDepartement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$demandeDepartement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($demandeDepartement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_demande_departement_index', [], Response::HTTP_SEE_OTHER);
    }
}
