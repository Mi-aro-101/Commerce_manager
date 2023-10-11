<?php

namespace App\Controller;

use App\Entity\TestAptitude;
use App\Form\TestAptitudeType;
use App\Repository\TestAptitudeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ReponseSection;
use App\Entity\Section;
use App\Repository\CVRequirementsRepository;

#[Route('/test/aptitude')]
class TestAptitudeController extends AbstractController
{
    #[Route('/', name: 'app_test_aptitude_index', methods: ['GET'])]
    public function index(TestAptitudeRepository $testAptitudeRepository): Response
    {
        return $this->render('test_aptitude/index.html.twig', [
            'test_aptitudes' => $testAptitudeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_test_aptitude_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,CVRequirementsRepository $cVRequirementsRepository): Response
    {   
        $id = $_GET['id'];
        $cVRequirements = $cVRequirementsRepository->find($id);
        $testAptitude = new TestAptitude();

        $section = new Section();
        $section->setDesQuestion("Etes-vous gay ?");    
        $section->setCoefSection(4);
        $sectionreponse1 = new ReponseSection();
        $sectionreponse1->setDesReponse("Oui");
        $sectionreponse1->setIsTrue("true");
        $sectionreponse2 = new ReponseSection();
        $sectionreponse2->setDesReponse("Oui un peu");
        $sectionreponse2->setIsTrue("false");
        $section->addReponseSection($sectionreponse1);
        $section->addReponseSection($sectionreponse2);

        $testAptitude->addSection($section);
        $form = $this->createForm(TestAptitudeType::class, $testAptitude);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $testAptitude->setCvRequirements($cVRequirements);
            $entityManager->persist($testAptitude);
            $entityManager->flush();

            return $this->redirectToRoute('app_test_aptitude_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('test_aptitude/new.html.twig', [
            'cv_requirements' => $cVRequirements,
            'test_aptitude' => $testAptitude,
            'form' => $form ->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_test_aptitude_show', methods: ['GET'])]
    public function show(TestAptitude $testAptitude): Response
    {
        return $this->render('test_aptitude/show.html.twig', [
            'test_aptitude' => $testAptitude,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_test_aptitude_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TestAptitude $testAptitude, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TestAptitudeType::class, $testAptitude);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_test_aptitude_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('test_aptitude/edit.html.twig', [
            'test_aptitude' => $testAptitude,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_test_aptitude_delete', methods: ['POST'])]
    public function delete(Request $request, TestAptitude $testAptitude, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$testAptitude->getId(), $request->request->get('_token'))) {
            $entityManager->remove($testAptitude);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_test_aptitude_index', [], Response::HTTP_SEE_OTHER);
    }
}
