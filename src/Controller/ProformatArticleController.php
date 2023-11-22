<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Entity\DemandeDepartement;
use App\Entity\Fournisseur;
use App\Entity\ProformatArticle;
use App\Form\ProformatArticleType;
use App\Repository\ArticleRepository;
use App\Repository\FournisseurRepository;
use App\Repository\ProformatArticleRepository;
use App\Repository\ServiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/proformat/article')]
class ProformatArticleController extends AbstractController
{

    #[Route('/envoyer', name: 'app_proformat_article_envoyer', methods: ['GET', 'POST'])]
    public function envoyer(Request $request, EntityManagerInterface $entityManager,ProformatArticleRepository $proformatArticleRepository): Response
    {
        $id_fournisseur = $_GET['id_fournisseur'];
        $connection = $entityManager->getConnection();

        $proformatArticle = new ProformatArticle();
        $proformatArticle -> sendProformat($connection,$id_fournisseur,$proformatArticleRepository);
        // return $this->render('proformat_article/ok.html.twig', [
        //     // 'proformats' => $proformatArticle -> getProformatNotSend($connection,$id_fournisseur,$proformatArticleRepository)
        // ]);
        return $this->redirectToRoute('app_proformat_article_envoyer', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/commander', name: 'app_proformat_article_commander', methods: ['GET'])]
    public function commander(EntityManagerInterface $entityManager,ProformatArticleRepository $proformatArticleRepository,ArticleRepository $articleRepository,FournisseurRepository $fournisseurRepository,ServiceRepository $serviceRepository): Response
    {
        $connection = $entityManager->getConnection();
        $id_article = $_GET['id_article'];
        $id_fournisseur = $_GET['id_fournisseur'];

        $article = $articleRepository->find($id_article);
        $fournisseur = $fournisseurRepository->find($id_fournisseur);

        $demande = new Demande();
        $demande = $demande -> toSaveDemande($connection,$id_article,$articleRepository);
        
        $entityManager -> persist($demande);

        $demandeDepartement =  new DemandeDepartement();
        $demandesDepartement = $demandeDepartement -> getArticleNonTraiteDetails($connection,$id_article,$articleRepository,$serviceRepository);
        
        $proformat = new ProformatArticle();
        $proformat -> generateProformatArticle($connection,$demande,$fournisseur);
        $entityManager -> persist($proformat);
        $entityManager -> flush();
        foreach ($demandesDepartement as $demandeD) {
            # code...
            $demandeD -> updateStatutAndDemande($connection,$demande);

        }

        // return $this->render('proformat_article/index.html.twig', [
        //     'proformat_articles' => $proformatArticleRepository->findAll(),
        // ]);
        return $this->redirectToRoute('app_demande_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/', name: 'app_proformat_article_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager,ProformatArticleRepository $proformatArticleRepository,FournisseurRepository $fournisseurRepository): Response
    {   
        $connection = $entityManager->getConnection();
        $fournisseur = new Fournisseur();

        return $this->render('proformat_article/index.html.twig', [
            'fournisseurs' => $fournisseur -> getFournisseurProformat($connection,$fournisseurRepository),
        ]);
    }

    #[Route('/traiter', name: 'app_proformat_article_traiter', methods: ['GET', 'POST'])]
    public function traiter(Request $request, EntityManagerInterface $entityManager,ProformatArticleRepository $proformatArticleRepository): Response
    {
        $id_fournisseur = $_GET['id_fournisseur'];
        $connection = $entityManager->getConnection();

        $proformatArticle = new ProformatArticle();

        return $this->render('proformat_article/traiter.html.twig', [
            'proformats' => $proformatArticle -> getProformatNotSend($connection,$id_fournisseur,$proformatArticleRepository)
        ]);
    }

    //CRUD
    #[Route('/new', name: 'app_proformat_article_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $proformatArticle = new ProformatArticle();
        $form = $this->createForm(ProformatArticleType::class, $proformatArticle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($proformatArticle);
            $entityManager->flush();

            return $this->redirectToRoute('app_proformat_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('proformat_article/new.html.twig', [
            'proformat_article' => $proformatArticle,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_proformat_article_show', methods: ['GET'])]
    public function show(ProformatArticle $proformatArticle): Response
    {
        return $this->render('proformat_article/show.html.twig', [
            'proformat_article' => $proformatArticle,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_proformat_article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ProformatArticle $proformatArticle, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProformatArticleType::class, $proformatArticle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_proformat_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('proformat_article/edit.html.twig', [
            'proformat_article' => $proformatArticle,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_proformat_article_delete', methods: ['POST'])]
    public function delete(Request $request, ProformatArticle $proformatArticle, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$proformatArticle->getId(), $request->request->get('_token'))) {
            $entityManager->remove($proformatArticle);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_proformat_article_index', [], Response::HTTP_SEE_OTHER);
    }
}
