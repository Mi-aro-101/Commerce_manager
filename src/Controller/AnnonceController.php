<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ServiceRepository;
use App\Repository\DiplomeRepository;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/annonce')]
class AnnonceController extends AbstractController
{
    #[Route('/', name: 'app_annonce')]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function index(): Response
    {
        return $this->render('annonce/index.html.twig', [
            'controller_name' => 'AnnonceController',
        ]);
    }

    #[Route('/nouvelle', name: 'app_annonce_new')]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function nouvelle(ServiceRepository $serviceRepository, DiplomeRepository $diplomeRepository): Response
    {
        return $this->render('annonce/nouvelle_annonce.html.twig', [
            'controller_name' => 'AnnonceController',
            'services' => $serviceRepository->findAll(),
            'diplomes' => $diplomeRepository->findAll()
        ]);
    }
}
