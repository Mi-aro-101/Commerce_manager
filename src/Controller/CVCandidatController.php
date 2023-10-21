<?php
namespace App\Controller;

use App\Entity\CVCandidat;
use App\Entity\CvCandidatNote;
use App\Form\CVCandidatType;
use App\Repository\AdresseRepository;
use App\Repository\CvCandidatNoteRepository;
use App\Repository\CVCandidatRepository;
use App\Repository\CVRequirementsRepository;
use App\Repository\DiplomeRepository;
use App\Repository\ExperienceRepository;
use App\Repository\UtilisateurRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\Float_;
use PhpParser\Node\Expr\Cast\Double;
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
    public function new(Request $request, EntityManagerInterface $entityManager,CVRequirementsRepository $cVRequirementsRepository,UtilisateurRepository $utilisateurRepository, DiplomeRepository $diplomeRepository, ExperienceRepository $experienceRepository, AdresseRepository $adresseRepository): Response
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
            $cVCandidat->setCvrequirements($cVrequirements);
            $cVCandidat->setUtilisateur($user);
            $note = $this->setUpNotes($cVCandidat, $cVrequirements, $diplomeRepository, $experienceRepository, $adresseRepository);
            $cvCandidatNote = new CvCandidatNote();
            $cvCandidatNote->setUtilisateur($user);
            $cvCandidatNote->setCvrequirements($cVrequirements);
            $cvCandidatNote->setNote($note);

            $entityManager->persist($cVCandidat);
            $entityManager->persist($cvCandidatNote);
            $entityManager->flush();

            return $this->redirectToRoute('app_c_v_candidat_liste', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cv_candidat/new.html.twig', [
            'cv_requirements' => $cVrequirements,
            'formcv' => $form,
        ]);
    }

    public function setUpNotes($request, $cvRequirements, $diplomeRepository, $experienceRepository, $adresseRepository) : Float {
        $note = 0.0;

        echo $request->getSexe()->getDesSexe();
        $sexeNote = $this->getNote($request->getSexe()->getId(), $cvRequirements->getSexe()->getId());
        $sexeNote *= $cvRequirements->getCoefSexe();
        $matrimonialeNote = $this->getNote($request->getMatrimoniale()->getId(), $cvRequirements->getMatrimoniale()->getId());
        $matrimonialeNote *= $cvRequirements->getCoefMatrimoniale();
        $nationaliteNote = $this->getNote($request->getNationalite()->getId(), $cvRequirements->getNationalite()->getId());
        $nationaliteNote *= $cvRequirements->getCoefNationalite();

        $diplomeValue = ( $request->getDiplome()->getNivDiplome() ) * $cvRequirements->getCoefDiplome();
        $experienceValue = ( $request->getExperience()->getNivXp() ) * $cvRequirements->getCoefXp();
        $adresseValue = ( $request->getAdresse()->getNivAdresse() ) * $cvRequirements->getCoefAdresse();

        $note1 = $nationaliteNote+$matrimonialeNote+$sexeNote+$diplomeValue+$experienceValue+$adresseValue;

        return $note1;
    }

    public function getNote($var1, $var2) : int {
        $val=1;
        if($var1 == $var2){
            $val=2;
        }
        return $val;
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

    #[Route('/voircvcandidat/{idcandidat}', name:'app_c_v_candidat_by_candidat', methods:['GET'])]
    public function viewCvCandidat(Request $request, int $idcandidat ,CVCandidatRepository $cVCandidatRepository): Response
    {
        $cVCandidat = $cVCandidatRepository->findOneByCandidat($idcandidat);
        $validButton = '<h4 style="color:green"> Ce CV a deja ete accepte </h4>';

        #<a href="/c/v/candidat/acceptercv/x"> <button type="button" class="btn btn-block btn-success btn-lg">Approuver et fournir le test d'aptitude</button> </a>

        if($cVCandidat->getStatue() == 5){
            $validButton = '<a href="/c/v/candidat/acceptercv/'.$cVCandidat->getId().'"> <button type="button" class="btn btn-block btn-success btn-lg">Approuver et fournir le test d'.'aptitude</button> </a>';
        };

        return $this->render('cv_candidat/show_candidat.html.twig', [
            'cvCandidat' => $cVCandidat,
            'validButton' => $validButton
        ]);
    }

    #[Route('/acceptercv/{id}', name:'app_acceptercv_by_id', methods:['GET', 'POST'])]
    public function accepterCv(Request $request, int $id, EntityManagerInterface $entityManager) : Response
    {
        $cvCandidatAccepted = $entityManager->getRepository(CVCandidat::class)->find($id);
        $cvCandidatAccepted->setStatue(10);
        $datereponse = new DateTime(date('Y-m-d'));
        $cvCandidatAccepted->setDateReponse($datereponse);

        $entityManager->flush();

        return $this->render('cv_candidat/show_candidat.html.twig', [
            'cvCandidat' => $cvCandidatAccepted,
            'validButton' => '<h4 style="color:green> Ce CV a deja ete acceptee</h4>'
        ]);
    }

}
