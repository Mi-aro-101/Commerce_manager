<?php

namespace App\Controller;

use App\Entity\BonLivraison;
use App\Entity\BonReception;
use App\Entity\Immobilisation;
use App\Form\BonLivraisonType;
use App\Repository\BonCommandeRepository;
use App\Repository\BonLivraisonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/bon/livraison')]
class BonLivraisonController extends AbstractController
{
    #[Route('/', name: 'app_bon_livraison_index', methods: ['GET'])]
    public function index(BonLivraisonRepository $bonLivraisonRepository): Response
    {
        return $this->render('bon_livraison/index.html.twig', [
            'bon_livraisons' => $bonLivraisonRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_bon_livraison_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $bonLivraison = new BonLivraison();
        $form = $this->createForm(BonLivraisonType::class, $bonLivraison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($bonLivraison);
            $entityManager->flush();

            return $this->redirectToRoute('app_bon_livraison_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bon_livraison/new.html.twig', [
            'bon_livraison' => $bonLivraison,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_bon_livraison_show', methods: ['GET'])]
    public function show(BonLivraison $bonLivraison): Response
    {
        return $this->render('bon_livraison/show.html.twig', [
            'bon_livraison' => $bonLivraison,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_bon_livraison_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, BonLivraison $bonLivraison, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BonLivraisonType::class, $bonLivraison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_bon_livraison_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bon_livraison/edit.html.twig', [
            'bon_livraison' => $bonLivraison,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_bon_livraison_delete', methods: ['POST'])]
    public function delete(Request $request, BonLivraison $bonLivraison, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bonLivraison->getId(), $request->request->get('_token'))) {
            $entityManager->remove($bonLivraison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_bon_livraison_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/bon/livraison/confirmer', name:'app_bon_livraison_confirmer')]
    public function confirmerbonLivraison(BonCommandeRepository $bonCommandeRepository, EntityManagerInterface $entityManager){
        $bonLivraison = new BonLivraison();
        $id = $bonLivraison->getBonLivraisonSeq($entityManager);

        $id_bonCommande = $_POST["bonCommande"];
        $bonCommande = $bonCommandeRepository->find($id_bonCommande);
        $bonCommande->setStatut(10);
        $ref = $_POST["reference"];

        $bonLivraison->setId($id);
        $bonLivraison->setDateLivraison($bonCommande->getDateLivraison());
        $bonLivraison->setBonCommande($bonCommande);
        $bonLivraison->setBonReceptionRef($ref);

        $bonReception = new BonReception();
        $bonReception->setBonLivraison($bonLivraison);
        $bonReception->setReference($ref);

        $taux_ammortissement = $_POST["taux"];
        $taux_ammortissement = doubleval($taux_ammortissement);

        $immobilisation = new Immobilisation();
        $immobilisationArray = $immobilisation->getImmobilisations($bonReception, $taux_ammortissement);

        $entityManager->persist(($bonLivraison));
        $entityManager->persist($bonCommande);
        $entityManager->persist($bonReception);
        foreach ($immobilisationArray as $immobilisation){
            $entityManager->persist($immobilisation);
        }
        $entityManager->flush();

        return $this->redirectToRoute('app_bon_commande_attente_livraison', [], Response::HTTP_SEE_OTHER);

    }
}
