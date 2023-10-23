<?php

namespace App\Controller;

use App\Entity\TestResultat;
use App\Form\TestResultatType;
use App\Repository\CVRequirementsRepository;
use App\Repository\TestAptitudeRepository;
use App\Repository\TestResultatRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/test/resultat')]
class TestResultatController extends AbstractController
{

    // #[Route('/test', name: 'app_c_v_candidat_test', methods: ['GET', 'POST'])]
    // public function test(Request $request, EntityManagerInterface $entityManager,CVRequirementsRepository $cVRequirementsRepository,TestAptitudeRepository $testAptitudeRepository): Response
    // {
    //     $id = $_GET['id'];
    //     $cVrequirements = $cVRequirementsRepository->find($id);
    //     $test = $testAptitudeRepository -> findOneByCvRequirements($cVrequirements);
    //     return $this->render('cv_candidat/T\test_aptidute.html.twig', [
    //         'test' => $test ,
    //     ]);
    // }
    
    #[Route('/', name: 'app_test_resultat_index', methods: ['GET'])]
    public function index(TestResultatRepository $testResultatRepository): Response
    {
        return $this->render('test_resultat/index.html.twig', [
            'test_resultats' => $testResultatRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_test_resultat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,CVRequirementsRepository $cVRequirementsRepository,TestAptitudeRepository $testAptitudeRepository): Response
    {
        $testResultat = new TestResultat();
        $id = $_GET['id'];
        $cVrequirements = $cVRequirementsRepository->find($id);
        $testAptitude = $testAptitudeRepository -> findOneByCvRequirements($cVrequirements);
        $testResultat ->setTestAptitude($testAptitude);
        $form = $this->createForm(TestResultatType::class, $testResultat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($testResultat);
            $entityManager->flush();

            return $this->redirectToRoute('app_test_resultat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('test_resultat/new.html.twig', [
            'test_resultat' => $testResultat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_test_resultat_show', methods: ['GET'])]
    public function show(TestResultat $testResultat): Response
    {
        return $this->render('test_resultat/show.html.twig', [
            'test_resultat' => $testResultat,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_test_resultat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TestResultat $testResultat, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TestResultatType::class, $testResultat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_test_resultat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('test_resultat/edit.html.twig', [
            'test_resultat' => $testResultat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_test_resultat_delete', methods: ['POST'])]
    public function delete(Request $request, TestResultat $testResultat, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$testResultat->getId(), $request->request->get('_token'))) {
            $entityManager->remove($testResultat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_test_resultat_index', [], Response::HTTP_SEE_OTHER);
    }
}
