<?php

namespace App\Controller;

use App\Entity\Nationalite;
use App\Form\NationaliteType;
use App\Repository\NationaliteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/nationalite')]
class NationaliteController extends AbstractController
{
    #[Route('/', name: 'app_nationalite_index', methods: ['GET'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function index(NationaliteRepository $nationaliteRepository): Response
    {
        return $this->render('nationalite/index.html.twig', [
            'nationalites' => $nationaliteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_nationalite_new', methods: ['GET', 'POST'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $nationalite = new Nationalite();
        $form = $this->createForm(NationaliteType::class, $nationalite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($nationalite);
            $entityManager->flush();

            return $this->redirectToRoute('app_nationalite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('nationalite/new.html.twig', [
            'nationalite' => $nationalite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_nationalite_show', methods: ['GET'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function show(Nationalite $nationalite): Response
    {
        return $this->render('nationalite/show.html.twig', [
            'nationalite' => $nationalite,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_nationalite_edit', methods: ['GET', 'POST'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function edit(Request $request, Nationalite $nationalite, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(NationaliteType::class, $nationalite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_nationalite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('nationalite/edit.html.twig', [
            'nationalite' => $nationalite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_nationalite_delete', methods: ['POST'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function delete(Request $request, Nationalite $nationalite, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$nationalite->getId(), $request->request->get('_token'))) {
            $entityManager->remove($nationalite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_nationalite_index', [], Response::HTTP_SEE_OTHER);
    }
}
