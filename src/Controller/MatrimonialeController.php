<?php

namespace App\Controller;

use App\Entity\Matrimoniale;
use App\Form\MatrimonialeType;
use App\Repository\MatrimonialeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/matrimoniale')]
class MatrimonialeController extends AbstractController
{
    #[Route('/', name: 'app_matrimoniale_index', methods: ['GET'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function index(MatrimonialeRepository $matrimonialeRepository): Response
    {
        return $this->render('matrimoniale/index.html.twig', [
            'matrimoniales' => $matrimonialeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_matrimoniale_new', methods: ['GET', 'POST'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $matrimoniale = new Matrimoniale();
        $form = $this->createForm(MatrimonialeType::class, $matrimoniale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($matrimoniale);
            $entityManager->flush();

            return $this->redirectToRoute('app_matrimoniale_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('matrimoniale/new.html.twig', [
            'matrimoniale' => $matrimoniale,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_matrimoniale_show', methods: ['GET'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function show(Matrimoniale $matrimoniale): Response
    {
        return $this->render('matrimoniale/show.html.twig', [
            'matrimoniale' => $matrimoniale,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_matrimoniale_edit', methods: ['GET', 'POST'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function edit(Request $request, Matrimoniale $matrimoniale, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MatrimonialeType::class, $matrimoniale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_matrimoniale_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('matrimoniale/edit.html.twig', [
            'matrimoniale' => $matrimoniale,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_matrimoniale_delete', methods: ['POST'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function delete(Request $request, Matrimoniale $matrimoniale, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$matrimoniale->getId(), $request->request->get('_token'))) {
            $entityManager->remove($matrimoniale);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_matrimoniale_index', [], Response::HTTP_SEE_OTHER);
    }
}
