<?php

namespace App\Controller;

use App\Entity\CvCandidatNote;
use App\Entity\CVRequirements;
use App\Form\CVRequirementsType;
use App\Repository\AdresseRepository;
use App\Repository\CvCandidatNoteRepository;
use App\Repository\CVCandidatRepository;
use App\Repository\CVRequirementsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ServiceRepository;
use App\Repository\DiplomeRepository;
use App\Repository\DomaineRepository;
use App\Repository\ExperienceRepository;
use App\Repository\MatrimonialeRepository;
use App\Repository\NationaliteRepository;
use App\Repository\SexeRepository;

#[Route('/c/v/requirements')]
class CVRequirementsController extends AbstractController
{
    #[Route('/liste_candidat_cv', name: 'app_c_v_requirements_liste_candidat_cv', methods: ['GET'])]
    public function liste_candidat_cv(CVRequirementsRepository $cVRequirementsRepository,CVCandidatRepository $cVCandidatRepository, CvCandidatNoteRepository $cvCandidatNoteRepository): Response
    {
        $id = $_GET['id'];
        $cvCandidats = $cvCandidatNoteRepository->findByCvRequirements($id);
        return $this->render('cv_requirements/liste_candidats_cv.html.twig', [
            'cvCandidats' => $cvCandidats,
        ]);
    }

    #[Route('/', name: 'app_c_v_requirements_index', methods: ['GET'])]
    public function index(CVRequirementsRepository $cVRequirementsRepository): Response
    {
        return $this->render('cv_requirements/index.html.twig', [
            'c_v_requirements' => $cVRequirementsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_c_v_requirements_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,ServiceRepository $serviceRepository, DiplomeRepository $diplomeRepository,DomaineRepository $domaineRepository,ExperienceRepository $experienceRepository,AdresseRepository $adresseRepository,SexeRepository $sexeRepository,NationaliteRepository $nationaliteRepository,MatrimonialeRepository $matrimonialeRepository): Response
    {
        $cVRequirement = new CVRequirements();
        $form = $this->createForm(CVRequirementsType::class, $cVRequirement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $entityManager->persist($cVRequirement);
            $entityManager->flush();

            return $this->redirectToRoute('app_c_v_requirements_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('annonce/nouvelle_annonce.html.twig', [
            'c_v_requirement' => $cVRequirement,
            'formcv' => $form -> createView()
        ]);
    }

    #[Route('/{id}', name: 'app_c_v_requirements_show', methods: ['GET'])]
    public function show(CVRequirements $cVRequirement): Response
    {
        return $this->render('cv_requirements/show.html.twig', [
            'c_v_requirement' => $cVRequirement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_c_v_requirements_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CVRequirements $cVRequirement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CVRequirementsType::class, $cVRequirement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_c_v_requirements_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cv_requirements/edit.html.twig', [
            'c_v_requirement' => $cVRequirement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_c_v_requirements_delete', methods: ['POST'])]
    public function delete(Request $request, CVRequirements $cVRequirement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cVRequirement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($cVRequirement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_c_v_requirements_index', [], Response::HTTP_SEE_OTHER);
    }
}
