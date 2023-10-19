<?php
namespace App\Controller;

use App\Entity\CVCandidat;
use App\Form\CVCandidatType;
use App\Repository\CVCandidatRepository;
use App\Repository\CVRequirementsRepository;
use App\Repository\TestAptitudeRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/c/v/candidat')]
class CVCandidatController extends AbstractController
{
    
    #[Route('/liste', name: 'app_c_v_candidat_liste', methods: ['GET', 'POST'])]
    public function liste_annonce(Request $request, EntityManagerInterface $entityManager,CVRequirementsRepository $cVRequirementsRepository): Response
    {
        return $this->render('cv_candidat/liste_annonce.html.twig', [
            'c_v_disponibles' => $cVRequirementsRepository->findAll()
        ]);
    }

    #[Route('/', name: 'app_c_v_candidat_index', methods: ['GET'])]
    public function index(CVCandidatRepository $cVCandidatRepository): Response
    {
        return $this->render('cv_candidat/index.html.twig', [
            'c_v_candidats' => $cVCandidatRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_c_v_candidat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,CVRequirementsRepository $cVRequirementsRepository,UtilisateurRepository $utilisateurRepository): Response
    {
        $id = $_GET['id'];
        $cVrequirements = $cVRequirementsRepository->find($id);
        $user_session = $this->getUser();
        $user = $utilisateurRepository->find($user_session);
        $cVCandidat = new CVCandidat();
        $form = $this->createForm(CVCandidatType::class, $cVCandidat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cVCandidat->setStatue(5);
            // $cVCandidat->setDateReponse(null);
            $cVCandidat->setCvrequirements($cVrequirements);
            $cVCandidat->setUtilisateur($user);
            $entityManager->persist($cVCandidat);
            $entityManager->flush();

            return $this->redirectToRoute('app_c_v_candidat_liste', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cv_candidat/new.html.twig', [
            'cv_requirements' => $cVrequirements,
            'formcv' => $form,
        ]);
    }

    // #[Route('/new', name: 'app_c_v_candidat_new', methods: ['GET', 'POST'])]
    // public function new(Request $request, EntityManagerInterface $entityManager): Response
    // {
    //     $cVCandidat = new CVCandidat();
    //     $form = $this->createForm(CVCandidatType::class, $cVCandidat);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $entityManager->persist($cVCandidat);
    //         $entityManager->flush();

    //         return $this->redirectToRoute('app_c_v_candidat_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->render('cv_candidat/new.html.twig', [
    //         'c_v_candidat' => $cVCandidat,
    //         'form' => $form,
    //     ]);
    // }

    #[Route('/{id}', name: 'app_c_v_candidat_show', methods: ['GET'])]
    public function show(CVCandidat $cVCandidat): Response
    {
        return $this->render('cv_candidat/show.html.twig', [
            'c_v_candidat' => $cVCandidat,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_c_v_candidat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CVCandidat $cVCandidat, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CVCandidatType::class, $cVCandidat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_c_v_candidat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cv_candidat/edit.html.twig', [
            'c_v_candidat' => $cVCandidat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_c_v_candidat_delete', methods: ['POST'])]
    public function delete(Request $request, CVCandidat $cVCandidat, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cVCandidat->getId(), $request->request->get('_token'))) {
            $entityManager->remove($cVCandidat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_c_v_candidat_index', [], Response::HTTP_SEE_OTHER);
    }
}
