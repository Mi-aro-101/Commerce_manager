<?php

namespace App\Controller;

use App\Entity\Sexe;
use App\Form\SexeType;
use App\Repository\SexeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/sexe')]
class SexeController extends AbstractController
{
    #[Route('/', name: 'app_sexe_index', methods: ['GET'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function index(SexeRepository $sexeRepository): Response
    {
        return $this->render('sexe/index.html.twig', [
            'sexes' => $sexeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_sexe_new', methods: ['GET', 'POST'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sexe = new Sexe();
        $form = $this->createForm(SexeType::class, $sexe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($sexe);
            $entityManager->flush();

            return $this->redirectToRoute('app_sexe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sexe/new.html.twig', [
            'sexe' => $sexe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sexe_show', methods: ['GET'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function show(Sexe $sexe): Response
    {
        return $this->render('sexe/show.html.twig', [
            'sexe' => $sexe,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_sexe_edit', methods: ['GET', 'POST'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function edit(Request $request, Sexe $sexe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SexeType::class, $sexe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_sexe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sexe/edit.html.twig', [
            'sexe' => $sexe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sexe_delete', methods: ['POST'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function delete(Request $request, Sexe $sexe, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sexe->getId(), $request->request->get('_token'))) {
            $entityManager->remove($sexe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_sexe_index', [], Response::HTTP_SEE_OTHER);
    }
}
