<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class HomeDepartementController extends AbstractController
{
    #[Route('/home/departement', name: 'app_home_departement')]
    #[IsGranted("ROLE_ADMIN_DEPARTEMENT", statusCode:404, message:"Error 404 Page not found")]
    public function index(): Response
    {
        return $this->render('home_departement/index.html.twig', [
            'controller_name' => 'HomeDepartementController',
        ]);
    }
}
