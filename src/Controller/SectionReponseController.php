<?php

namespace App\Controller;

use App\Entity\SectionReponse;
use App\Form\SectionReponseType;
use App\Repository\SectionReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/section/reponse')]
class SectionReponseController extends AbstractController
{
    #[Route('/', name: 'app_section_reponse_index', methods: ['GET'])]
    public function index(SectionReponseRepository $sectionReponseRepository): Response
    {
        return $this->render('section_reponse/index.html.twig', [
            'section_reponses' => $sectionReponseRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_section_reponse_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sectionReponse = new SectionReponse();
        $form = $this->createForm(SectionReponseType::class, $sectionReponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($sectionReponse);
            $entityManager->flush();

            return $this->redirectToRoute('app_section_reponse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('section_reponse/new.html.twig', [
            'section_reponse' => $sectionReponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_section_reponse_show', methods: ['GET'])]
    public function show(SectionReponse $sectionReponse): Response
    {
        return $this->render('section_reponse/show.html.twig', [
            'section_reponse' => $sectionReponse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_section_reponse_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SectionReponse $sectionReponse, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SectionReponseType::class, $sectionReponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_section_reponse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('section_reponse/edit.html.twig', [
            'section_reponse' => $sectionReponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_section_reponse_delete', methods: ['POST'])]
    public function delete(Request $request, SectionReponse $sectionReponse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sectionReponse->getId(), $request->request->get('_token'))) {
            $entityManager->remove($sectionReponse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_section_reponse_index', [], Response::HTTP_SEE_OTHER);
    }
}
