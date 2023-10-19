<?php

namespace App\Controller;

use App\Entity\CvCandidatNote;
use App\Form\CvCandidatNoteType;
use App\Repository\CvCandidatNoteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cv/candidat/note')]
class CvCandidatNoteController extends AbstractController
{
    #[Route('/', name: 'app_cv_candidat_note_index', methods: ['GET'])]
    public function index(CvCandidatNoteRepository $cvCandidatNoteRepository): Response
    {
        return $this->render('cv_candidat_note/index.html.twig', [
            'cv_candidat_notes' => $cvCandidatNoteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_cv_candidat_note_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $cvCandidatNote = new CvCandidatNote();
        $form = $this->createForm(CvCandidatNoteType::class, $cvCandidatNote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($cvCandidatNote);
            $entityManager->flush();

            return $this->redirectToRoute('app_cv_candidat_note_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cv_candidat_note/new.html.twig', [
            'cv_candidat_note' => $cvCandidatNote,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cv_candidat_note_show', methods: ['GET'])]
    public function show(CvCandidatNote $cvCandidatNote): Response
    {
        return $this->render('cv_candidat_note/show.html.twig', [
            'cv_candidat_note' => $cvCandidatNote,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_cv_candidat_note_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CvCandidatNote $cvCandidatNote, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CvCandidatNoteType::class, $cvCandidatNote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_cv_candidat_note_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cv_candidat_note/edit.html.twig', [
            'cv_candidat_note' => $cvCandidatNote,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cv_candidat_note_delete', methods: ['POST'])]
    public function delete(Request $request, CvCandidatNote $cvCandidatNote, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cvCandidatNote->getId(), $request->request->get('_token'))) {
            $entityManager->remove($cvCandidatNote);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_cv_candidat_note_index', [], Response::HTTP_SEE_OTHER);
    }
}
