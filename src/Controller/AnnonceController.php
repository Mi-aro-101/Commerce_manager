<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ServiceRepository;
use App\Repository\DiplomeRepository;

#[Route('/annonce')]
class AnnonceController extends AbstractController
{
    #[Route('/', name: 'app_annonce')]
    public function index(): Response
    {
        return $this->render('annonce/index.html.twig', [
            'controller_name' => 'AnnonceController',
        ]);
    }

    #[Route('/nouvelle', name: 'app_annonce_new')]
    public function nouvelle(ServiceRepository $serviceRepository, DiplomeRepository $diplomeRepository): Response
    {
        return $this->render('annonce/nouvelle_annonce.html.twig', [
            'controller_name' => 'AnnonceController',
            'services' => $serviceRepository->findAll(),
            'diplomes' => $diplomeRepository->findAll()
        ]);
    }
}
