<?php

namespace App\Controller;

use App\Entity\BonCommande;
use App\Entity\BonCommandeDetail;
use App\Entity\Fournisseur;
use App\Entity\ProformatArticle;
use App\Form\BonCommandeType;
use App\Repository\BonCommandeRepository;
use App\Repository\FournisseurRepository;
use App\Repository\ProformatArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/bon/commande')]
class BonCommandeController extends AbstractController
{
    #[Route('/traiter', name: 'app_bon_commande_traiter', methods: ['GET'])]
    public function traiter(Request $request,EntityManagerInterface $entityManager,FournisseurRepository $fournisseurRepository,ProformatArticleRepository $proformatArticleRepository): Response
    {
        // $connection = $entityManager->getConnection();
        $id_fournisseur = $_GET['id_fournisseur'];
        $fournisseur = $fournisseurRepository -> find($id_fournisseur);
        // $proformatt = new ProformatArticle();
        // $proformats = $proformatt -> receiveProformat($connection,$id_fournisseur,$proformatArticleRepository);
        $bonCommande = new BonCommande();
        $form = $this->createForm(BonCommandeType::class, $bonCommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bonCommande -> setFournisseur($fournisseur);
            $entityManager->persist($bonCommande);
            // foreach ($proformats as $proformat ) {
            //     $proformat -> updradeStatut($connection,20);
            //     $detail = new BonCommandeDetail();
            //     $detail -> setId($detail -> getSequenceBonCommandeDetail($connection));
            //     $detail -> setBonCommande($bonCommande);
            //     $detail -> setProformatArticle($proformat);
            //     $entityManager->persist($detail);
            //     # code...
            // }

            $entityManager->flush();

            return $this->redirectToRoute('app_bon_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bon_commande/new.html.twig', [
            'bon_commande' => $bonCommande,
            'form' => $form,
        ]);
    }
    
    #[Route('/recu', name: 'app_bon_commande_recu', methods: ['GET'])]
    public function recu(EntityManagerInterface $entityManager, FournisseurRepository $fournisseurRepository,BonCommandeRepository $bonCommandeRepository): Response
    {
        $connection = $entityManager->getConnection();
        $fournisseur = new Fournisseur();

        return $this->render('bon_commande/recu.html.twig', [
            'fournisseurs' => $fournisseur -> getFournisseurProformatEnvoye($connection,$fournisseurRepository),
        ]);
    }

    //CRUD
    #[Route('/', name: 'app_bon_commande_index', methods: ['GET'])]
    public function index(BonCommandeRepository $bonCommandeRepository): Response
    {
        return $this->render('bon_commande/index.html.twig', [
            'bon_commandes' => $bonCommandeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_bon_commande_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,FournisseurRepository $fournisseurRepository,ProformatArticleRepository $proformatArticleRepository): Response
    {
       $connection = $entityManager->getConnection();
       $id_fournisseur = $_GET['id_fournisseur'];
       $fournisseur = $fournisseurRepository -> find($id_fournisseur);
       $proformatt = new ProformatArticle();
       $proformats = $proformatt -> receiveProformat($connection,$id_fournisseur,$proformatArticleRepository);
        $bonCommande = new BonCommande();
        $form = $this->createForm(BonCommandeType::class, $bonCommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bonCommande -> setFournisseur($fournisseur);
            $entityManager->persist($bonCommande);
            foreach ($proformats as $proformat ) {
                $proformat -> updradeStatut($connection,20);
                $detail = new BonCommandeDetail();
                $detail -> setId($detail -> getSequenceBonCommandeDetail($connection));
                $detail -> setBonCommande($bonCommande);
                $detail -> setProformatArticle($proformat);
                $entityManager->persist($detail);
                # code...
            }
            $entityManager->flush();

            return $this->redirectToRoute('app_bon_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bon_commande/new.html.twig', [
            'bon_commande' => $bonCommande,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_bon_commande_show', methods: ['GET'])]
    public function show(BonCommande $bonCommande): Response
    {
        return $this->render('bon_commande/show.html.twig', [
            'bon_commande' => $bonCommande,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_bon_commande_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, BonCommande $bonCommande, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BonCommandeType::class, $bonCommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_bon_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bon_commande/edit.html.twig', [
            'bon_commande' => $bonCommande,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_bon_commande_delete', methods: ['POST'])]
    public function delete(Request $request, BonCommande $bonCommande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bonCommande->getId(), $request->request->get('_token'))) {
            $entityManager->remove($bonCommande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_bon_commande_index', [], Response::HTTP_SEE_OTHER);
    }
}
