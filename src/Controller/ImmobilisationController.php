<?php

namespace App\Controller;

use App\Entity\Immobilisation;
use App\Form\ImmobilisationType;
use App\Repository\ArticleRepository;
use App\Repository\BonReceptionRepository;
use App\Repository\ImmobilisationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/immobilisation')]
class ImmobilisationController extends AbstractController
{
    #[Route('/', name: 'app_immobilisation_index', methods: ['GET'])]
    public function index(ImmobilisationRepository $immobilisationRepository): Response
    {
        return $this->render('immobilisation/index.html.twig', [
            'immobilisations' => $immobilisationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_immobilisation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $immobilisation = new Immobilisation();
        $form = $this->createForm(ImmobilisationType::class, $immobilisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($immobilisation);
            $entityManager->flush();

            return $this->redirectToRoute('app_immobilisation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('immobilisation/new.html.twig', [
            'immobilisation' => $immobilisation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_immobilisation_show', methods: ['GET'])]
    public function show(Immobilisation $immobilisation): Response
    {
        return $this->render('immobilisation/show.html.twig', [
            'immobilisation' => $immobilisation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_immobilisation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Immobilisation $immobilisation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ImmobilisationType::class, $immobilisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_immobilisation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('immobilisation/edit.html.twig', [
            'immobilisation' => $immobilisation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_immobilisation_delete', methods: ['POST'])]
    public function delete(Request $request, Immobilisation $immobilisation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$immobilisation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($immobilisation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_immobilisation_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/immobilisation/non/traite', name:'app_immobilisation_non_traite')]
    public function nonTraite(EntityManagerInterface $entityManager, ArticleRepository $articleRepository, BonReceptionRepository $bonReceptionRepository){
        $immobilisation = new Immobilisation();
        $immobilisationNonTraites = $immobilisation->getImmobilisationNonTraites($entityManager, $articleRepository, $bonReceptionRepository);

        return $this->render('immobilisation/non_traite.html.twig', [
            'immobilisations' => $immobilisationNonTraites
        ]);
    }

    #[Route('/immobilisation/traite', name:'app_immobilisation_traite')]
    public function traite(EntityManagerInterface $entityManager, ArticleRepository $articleRepository, BonReceptionRepository $bonReceptionRepository){
        $immobilisation = new Immobilisation();
        $immobilisationNonTraites = $immobilisation->getImmobilisationTraites($entityManager, $articleRepository, $bonReceptionRepository);

        return $this->render('immobilisation/traite.html.twig', [
            'immobilisations' => $immobilisationNonTraites
        ]);
    }
}
