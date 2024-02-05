<?php

namespace App\Controller;

use App\Entity\Immobilisation;
use App\Entity\ImmobilisationDetails;
use App\Form\ImmobilisationDetailsType;
use App\Repository\ImmobilisationDetailsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/immobilisation/details')]
class ImmobilisationDetailsController extends AbstractController
{
    #[Route('/', name: 'app_immobilisation_details_index', methods: ['GET'])]
    public function index(ImmobilisationDetailsRepository $immobilisationDetailsRepository): Response
    {
        return $this->render('immobilisation_details/index.html.twig', [
            'immobilisation_details' => $immobilisationDetailsRepository->findAll(),
        ]);
    }

    #[Route('/new/{id}', name: 'app_immobilisation_details_new', methods: ['GET', 'POST'])]
    public function new(Immobilisation $immobilisation, Request $request, EntityManagerInterface $entityManager): Response
    {
        $immobilisationDetail = new ImmobilisationDetails();
        $form = $this->createForm(ImmobilisationDetailsType::class, $immobilisationDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $immobilisationDetail->setImmobilisation($immobilisation);
            $entityManager->persist($immobilisationDetail);
            $entityManager->flush();

            return $this->redirectToRoute('app_immobilisation_non_traite', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('immobilisation_details/new.html.twig', [
            'immobilisation_detail' => $immobilisationDetail,
            'form' => $form,
            'immobilisation' => $immobilisation
        ]);
    }

    #[Route('/{id}', name: 'app_immobilisation_details_show', methods: ['GET'])]
    public function show(ImmobilisationDetails $immobilisationDetail): Response
    {
        return $this->render('immobilisation_details/show.html.twig', [
            'immobilisation_detail' => $immobilisationDetail,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_immobilisation_details_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ImmobilisationDetails $immobilisationDetail, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ImmobilisationDetailsType::class, $immobilisationDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_immobilisation_details_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('immobilisation_details/edit.html.twig', [
            'immobilisation_detail' => $immobilisationDetail,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_immobilisation_details_delete', methods: ['POST'])]
    public function delete(Request $request, ImmobilisationDetails $immobilisationDetail, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$immobilisationDetail->getId(), $request->request->get('_token'))) {
            $entityManager->remove($immobilisationDetail);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_immobilisation_details_index', [], Response::HTTP_SEE_OTHER);
    }
}
