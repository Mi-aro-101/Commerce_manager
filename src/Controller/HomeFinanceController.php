<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;


class HomeFinanceController extends AbstractController
{
    #[Route('/home/finance', name: 'app_home_finance')]
    #[IsGranted("ROLE_FINANCE", statusCode:404, message:"Error 404 Page not found")]
    public function index(): Response
    {
        return $this->render('home_finance/index.html.twig', [
            'controller_name' => 'HomeFinanceController',
        ]);
    }
}

?>

