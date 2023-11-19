<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class HomeAchatController extends AbstractController
{
    #[Route('/home/achat', name: 'app_home_achat')]
    #[IsGranted("ROLE_ACHAT", statusCode:404, message:"Error 404 Page not found")]
    public function index(): Response
    {
        return $this->render('home_achat/index.html.twig', [
            'controller_name' => 'HomeAchatController',
        ]);
    }
}
