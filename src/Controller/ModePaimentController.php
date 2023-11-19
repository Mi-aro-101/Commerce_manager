<?php

namespace App\Controller;

use App\Entity\ModePaiment;
use App\Form\ModePaimentType;
use App\Repository\ModePaimentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/mode/paiment')]
class ModePaimentController extends AbstractController
{
    #[Route('/', name: 'app_mode_paiment_index', methods: ['GET'])]
    public function index(ModePaimentRepository $modePaimentRepository): Response
    {
        return $this->render('mode_paiment/index.html.twig', [
            'mode_paiments' => $modePaimentRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_mode_paiment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $modePaiment = new ModePaiment();
        $form = $this->createForm(ModePaimentType::class, $modePaiment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($modePaiment);
            $entityManager->flush();

            return $this->redirectToRoute('app_mode_paiment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('mode_paiment/new.html.twig', [
            'mode_paiment' => $modePaiment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_mode_paiment_show', methods: ['GET'])]
    public function show(ModePaiment $modePaiment): Response
    {
        return $this->render('mode_paiment/show.html.twig', [
            'mode_paiment' => $modePaiment,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_mode_paiment_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ModePaiment $modePaiment, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ModePaimentType::class, $modePaiment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_mode_paiment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('mode_paiment/edit.html.twig', [
            'mode_paiment' => $modePaiment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_mode_paiment_delete', methods: ['POST'])]
    public function delete(Request $request, ModePaiment $modePaiment, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$modePaiment->getId(), $request->request->get('_token'))) {
            $entityManager->remove($modePaiment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_mode_paiment_index', [], Response::HTTP_SEE_OTHER);
    }
}
