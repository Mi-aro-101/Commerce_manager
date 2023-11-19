<?php

namespace App\Controller;

use App\Entity\Diplome;
use App\Form\DiplomeType;
use App\Repository\DiplomeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/diplome')]
class DiplomeController extends AbstractController
{
    #[Route('/', name: 'app_diplome_index', methods: ['GET'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function index(DiplomeRepository $diplomeRepository): Response
    {
        return $this->render('diplome/index.html.twig', [
            'diplomes' => $diplomeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_diplome_new', methods: ['GET', 'POST'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $diplome = new Diplome();
        $form = $this->createForm(DiplomeType::class, $diplome);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($diplome);
            $entityManager->flush();

            return $this->redirectToRoute('app_diplome_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('diplome/new.html.twig', [
            'diplome' => $diplome,
            'form' => $form,
        ]);
    }

    #[Route('/{id_diplome}', name: 'app_diplome_show', methods: ['GET'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function show(Diplome $diplome): Response
    {
        return $this->render('diplome/show.html.twig', [
            'diplome' => $diplome,
        ]);
    }

    #[Route('/{id_diplome}/edit', name: 'app_diplome_edit', methods: ['GET', 'POST'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function edit(Request $request, Diplome $diplome, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DiplomeType::class, $diplome);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_diplome_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('diplome/edit.html.twig', [
            'diplome' => $diplome,
            'form' => $form,
        ]);
    }

    #[Route('/{id_diplome}', name: 'app_diplome_delete', methods: ['POST'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function delete(Request $request, Diplome $diplome, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$diplome->getId(), $request->request->get('_token'))) {
            $entityManager->remove($diplome);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_diplome_index', [], Response::HTTP_SEE_OTHER);
    }
}