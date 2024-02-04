<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Form\DemandeType;
use App\Repository\ArticleFournisseurRepository;
use App\Repository\ArticleRepository;
use App\Repository\DemandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/demande')]
class DemandeController extends AbstractController
{
    #[Route('/', name: 'app_demande_index', methods: ['GET'])]
    public function index(DemandeRepository $demandeRepository,EntityManagerInterface $entityManager,ArticleRepository $articleRepository): Response
    {
        $connection = $entityManager->getConnection();
        $demande = new Demande();
        return $this->render('demande/index.html.twig', [
            'demandes' => $demande -> getArticlesNonTraites($connection,$articleRepository),
        ]);
    }

    #[Route('/traiter', name: 'app_demande_traiter', methods: ['GET'])]
    public function traiter(DemandeRepository $demandeRepository,EntityManagerInterface $entityManager,ArticleRepository $articleRepository, ArticleFournisseurRepository $articleFournisseurRepository): Response
    {
        $id_article = $_GET['id'];
        $connection = $entityManager->getConnection();
        $demande = new Demande();
        $demande =  $demande -> getArticleNonTraite($connection,$id_article,$articleRepository);
        $article = $articleRepository -> find($id_article);
        return $this->render('demande/listefournisseur.html.twig', [
            'demande' => $demande -> getArticleNonTraite($connection,$id_article,$articleRepository),
            'articleFournisseurs' => $articleFournisseurRepository->findByArticle($article),
        ]);
    }

    #[Route('/new', name: 'app_demande_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $demande = new Demande();
        $form = $this->createForm(DemandeType::class, $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($demande);
            $entityManager->flush();

            return $this->redirectToRoute('app_demande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('demande/new.html.twig', [
            'demande' => $demande,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_demande_show', methods: ['GET'])]
    public function show(Demande $demande): Response
    {
        return $this->render('demande/show.html.twig', [
            'demande' => $demande,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_demande_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Demande $demande, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DemandeType::class, $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_demande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('demande/edit.html.twig', [
            'demande' => $demande,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_demande_delete', methods: ['POST'])]
    public function delete(Request $request, Demande $demande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$demande->getId(), $request->request->get('_token'))) {
            $entityManager->remove($demande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_demande_index', [], Response::HTTP_SEE_OTHER);
    }
}
