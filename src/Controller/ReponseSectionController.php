<?php

namespace App\Controller;

use App\Entity\ReponseSection;
use App\Form\ReponseSectionType;
use App\Repository\ReponseSectionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reponse/section')]
class ReponseSectionController extends AbstractController
{
    #[Route('/', name: 'app_reponse_section_index', methods: ['GET'])]
    public function index(ReponseSectionRepository $reponseSectionRepository): Response
    {
        return $this->render('reponse_section/index.html.twig', [
            'reponse_sections' => $reponseSectionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reponse_section_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reponseSection = new ReponseSection();
        $form = $this->createForm(ReponseSectionType::class, $reponseSection);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reponseSection);
            $entityManager->flush();

            return $this->redirectToRoute('app_reponse_section_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reponse_section/new.html.twig', [
            'reponse_section' => $reponseSection,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_section_show', methods: ['GET'])]
    public function show(ReponseSection $reponseSection): Response
    {
        return $this->render('reponse_section/show.html.twig', [
            'reponse_section' => $reponseSection,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reponse_section_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReponseSection $reponseSection, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReponseSectionType::class, $reponseSection);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reponse_section_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reponse_section/edit.html.twig', [
            'reponse_section' => $reponseSection,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_section_delete', methods: ['POST'])]
    public function delete(Request $request, ReponseSection $reponseSection, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponseSection->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reponseSection);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reponse_section_index', [], Response::HTTP_SEE_OTHER);
    }
}
