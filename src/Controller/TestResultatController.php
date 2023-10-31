<?php

namespace App\Controller;

use App\Entity\TestResultat;
use App\Form\TestResultatType;
use App\Repository\CVRequirementsRepository;
use App\Repository\ReponseSectionRepository;
use App\Repository\SectionRepository;
use App\Repository\TestAptitudeRepository;
use App\Repository\TestResultatRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\SectionReponse;
use App\Entity\TestCandidatNote;
use PHPUnit\Framework\TestResult;

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
    public function new(Request $request, EntityManagerInterface $entityManager, CVRequirementsRepository $cVRequirementsRepository, TestAptitudeRepository $testAptitudeRepository, SectionRepository $sectionRepository, ReponseSectionRepository $reponseSectionRepository): Response
    {
        $testResultat = new TestResultat();
        $id = $_GET['id'];
        $cVrequirements = $cVRequirementsRepository->find($id);
        $testAptitude = $testAptitudeRepository -> findOneByCvRequirements($cVrequirements);
        $testResultat ->setTestAptitude($testAptitude);
        $user = $this->getUser();
        
        $sections = $sectionRepository->findBytestAptitude($testAptitude->getId());

        $form = $this->createForm(TestResultatType::class, $testResultat);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $testResultat->setStatut(5);
            $testResultat->setTestAptitude($testAptitude);
            $testResultat->setUtilisateur($user);

            $data = $request->request->all();
            $reponses = $data['sectionReponses'];
            $this->assignSectionReponse($reponses, $reponseSectionRepository, $testResultat);
            $testCandidatNote = $this->setTestCandidatNote($sections, $reponses, $reponseSectionRepository, $testResultat);

            $entityManager->persist($testResultat);
            $entityManager->persist($testCandidatNote);
            $entityManager->flush();

            return $this->redirectToRoute('app_test_resultat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('test_resultat/new.html.twig', [
            'test_resultat' => $testResultat,
            'form' => $form,
            'sections' => $sections,
        ]);
    }

    /**
     * This function is responsible for inserting each section reponse to TestResultat
     * @param $request is to get the value from form
     * @param $reponseSectionRepository to get the reponseSectionRepository by it's id and give it to the new sectionReponse
     * @param $name $testResultat for the ManyToOne field in sectionReponse
     * @return void
     */
    public function assignSectionReponse($reponses, $reponseSectionRepository, TestResultat $testResultats)
    {
        foreach($reponses as $reponseId){
            $reponse = $reponseSectionRepository->find((int)$reponseId);

            $sectionRep = new SectionReponse();
            $sectionRep->setReponse($reponse);

            $testResultats->addSectionReponse($sectionRep);
        }
    }

    /**
     * Set the testCandidatNote to flush to the database
     */
    public function setTestCandidatNote($sections, $reponses, $reponseSectionRepository, TestResultat $testResultat)
    {
        $Note = (int)$this->calculTestNote($sections, $reponses, $reponseSectionRepository);
        $testCandidatNote = new TestCandidatNote();
        $testCandidatNote->setTestResultat($testResultat);
        $testCandidatNote->setNote($Note);

        return $testCandidatNote;
    }

    /**
     * @return the note of this test
     */
    public function calculTestNote($sections, $reponses, $reponseSectionRepository) : int
    {
        $Notes = array();

        $i = 0;
        foreach($reponses as $reponse){
            $sectionid = strval($sections[$i]->getId());
            $true = $reponseSectionRepository->findBy(
                [
                    'section' => $sectionid,
                    'is_true' => 't'
                ]
            );
            $Notes[] = $this->getAttPoints($reponse, $true[0]) * $sections[$i]->getCoefSection();
            $i++;
        }

        return array_sum($Notes);
    }

    /**
     * Check whether this reponse is true and match the true response in the database or not
     * @return int 1 if false // 2 if true
     */
    public function getAttPoints($reponse, $true) : int
    {
        $result = 1;
        $true = $true->getId();

        if($reponse == $true){
            $result = 2;
        }

        return $result;
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
