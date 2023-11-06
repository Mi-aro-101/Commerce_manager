<?php

namespace App\Controller;

use App\Entity\Employe;
use App\Form\EmployeType;
use App\Repository\EmployeRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Attribute\IsGranted;

use Dompdf\Dompdf;

#[Route('/employe')]
class EmployeController extends AbstractController
{

    #[Route('/', name: 'app_employe_index', methods: ['GET'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function index(EmployeRepository $employeRepository): Response
    {
        $employes = $employeRepository->findAll();
        $managers = $this->getManager($employes);
        return $this->render('employe/index.html.twig', [
            'employes' => $employes,
            'managers' => $managers,
        ]);
    }

    /**
     * Generate a pdf of a fiche de paie
     */
    #[Route('/fiche', name: 'app_employe_fiche', methods: ['GET'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function fiche_paie(EmployeRepository $employeRepository): Response
    {   
        $id = $_GET['id'];
        $employe = $employeRepository->find($id);
        // $data = [
        //     'name'         => 'John Doe',
        //     'address'      => 'USA',
        //     'mobileNumber' => '000000000',
        //     'email'        => 'john.doe@email.com'
        // ];
        $data = $employe -> getFichePaie();
        $html =  $this->renderView('pdf_generator/index.html.twig', $data);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();
         
        return new Response (
            $dompdf->stream('resume', ["Attachment" => false]),
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf']
        );
    }

    /**
     * Get the display value in manager of the employee
     * @return array of the value that is supposed to be displayed on the superieur field
     */
    public function getManager($employes) : ?array
    {
        $results = [];
        $i = 0;
        foreach($employes as $employe){
            $results[$i] = $employe->getManagerProperyvalue();
            $i++;
        }
        return $results;
    }

    #[Route('/addemp/{idcandidat}', name: 'app_employe_new', methods: ['GET', 'POST'])]
    #[IsGranted("ROLE_ADMIN", statusCode:404, message:"Error 404 Page not found")]
    public function new(Request $request, int $idcandidat, EntityManagerInterface $entityManager, UtilisateurRepository $utilisateurRepository, EmployeRepository $employeRepository): Response
    {
        $employe = new Employe();
        $designeUser = $utilisateurRepository->find($idcandidat);

        $employe->setUtilisateur($designeUser);


        $form = $this->createForm(EmployeType::class, $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get the id of the superieur designed in the form and get the actual Employe superieur object by id
            $superieurId = $request->request->get('superieur');
            if($superieurId != ""){
                $superieur = $employeRepository->find($superieurId);
                if($superieur->getDateEmbauche() > $employe->getDateEmbauche()){
                    throw new AccessDeniedException(" La date d'embauche n'est pas valide ");
                }
                // if they put a superieur for this emp then set as it
                $employe->setSuperieur($superieur);
            }
            $entityManager->persist($employe);
            $entityManager->flush();

            return $this->redirectToRoute('app_employe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('employe/new.html.twig', [
            'employe' => $employe,
            'form' => $form,
            'employes' => $employeRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_employe_show', methods: ['GET'])]
    public function show(Employe $employe): Response
    {
        return $this->render('employe/show.html.twig', [
            'employe' => $employe,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_employe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Employe $employe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EmployeType::class, $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_employe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('employe/edit.html.twig', [
            'employe' => $employe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_employe_delete', methods: ['POST'])]
    public function delete(Request $request, Employe $employe, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$employe->getId(), $request->request->get('_token'))) {
            $entityManager->remove($employe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_employe_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * Function controller that will get all the amployes of an employe (technically the user itself)
     *
     * @param EmployeRepository $employeRepository
     * @return Response
     */
    #[Route('/view/my/employe', name: 'app_employe_view')]
     public function view(EmployeRepository $employeRepository): Response
    {
        $user = $this->getUser();
        $myemp = $employeRepository->findOneByUtilisateur($user->getId());
        // $myemp = $employeRepository->findOneByUtilisateur($user->getId());

        $employes = $employeRepository->findBy(
            [
                'superieur' => strval($myemp->getId())
            ]
        );

        return $this->render('employe/view_myemp.html.twig', [
            'employes' => $employes
        ]);
    }
}
