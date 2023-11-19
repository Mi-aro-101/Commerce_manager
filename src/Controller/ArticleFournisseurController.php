<?php

namespace App\Controller;

use App\Entity\ArticleFournisseur;
use App\Form\ArticleFournisseurType;
use App\Repository\ArticleFournisseurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/article/fournisseur')]
class ArticleFournisseurController extends AbstractController
{
    #[Route('/', name: 'app_article_fournisseur_index', methods: ['GET'])]
    public function index(ArticleFournisseurRepository $articleFournisseurRepository): Response
    {
        return $this->render('article_fournisseur/index.html.twig', [
            'article_fournisseurs' => $articleFournisseurRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_article_fournisseur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $articleFournisseur = new ArticleFournisseur();
        $form = $this->createForm(ArticleFournisseurType::class, $articleFournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($articleFournisseur);
            $entityManager->flush();

            return $this->redirectToRoute('app_article_fournisseur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article_fournisseur/new.html.twig', [
            'article_fournisseur' => $articleFournisseur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_article_fournisseur_show', methods: ['GET'])]
    public function show(ArticleFournisseur $articleFournisseur): Response
    {
        return $this->render('article_fournisseur/show.html.twig', [
            'article_fournisseur' => $articleFournisseur,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_article_fournisseur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ArticleFournisseur $articleFournisseur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ArticleFournisseurType::class, $articleFournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_article_fournisseur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article_fournisseur/edit.html.twig', [
            'article_fournisseur' => $articleFournisseur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_article_fournisseur_delete', methods: ['POST'])]
    public function delete(Request $request, ArticleFournisseur $articleFournisseur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$articleFournisseur->getId(), $request->request->get('_token'))) {
            $entityManager->remove($articleFournisseur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_article_fournisseur_index', [], Response::HTTP_SEE_OTHER);
    }
}
