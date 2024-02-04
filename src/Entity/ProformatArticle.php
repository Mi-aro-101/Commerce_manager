<?php

namespace App\Entity;

use App\Repository\ProformatArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Void_;

#[ORM\Entity(repositoryClass: ProformatArticleRepository::class)]
class ProformatArticle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Demande $demande = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Fournisseur $fournisseur = null;

    #[ORM\Column]
    private ?int $statut = null;

    private ?float $prixActuel;

    /**
     * get les proformats envoyés
     */
    public function receiveProformat($connexion,$id_fournisseur, ProformatArticleRepository $proformatArticleRepository): Collection {
        $query = "select * from v_get_proformat_send where fournisseur_id = '%s'";
        $query = sprintf($query,$id_fournisseur);
        $stmt = $connexion->prepare($query);
        $stmt = $stmt->executeQuery();
        $proformats = new ArrayCollection();
        while ($row = $stmt ->fetchAssociative()) {
            # code...
            $proformat = $proformatArticleRepository -> find($row['id']) ;
            $proformats -> add($proformat);
        }
        return $proformats;
    }

    /**
     * Send a proformat => change the statut of proformat to 10
     */
    public function sendProformat ($connexion,$id_fournisseur, ProformatArticleRepository $proformatArticleRepository) : void {
        $query = "select * from v_get_proformat_not_send where fournisseur_id = '%s'";
        $query = sprintf($query,$id_fournisseur);
        $stmt = $connexion->prepare($query);
        $stmt = $stmt->executeQuery();
        while ($row = $stmt ->fetchAssociative()) {
            # code...
            $proformat = $proformatArticleRepository -> find($row['id']) ;
            $proformat -> updradeStatut($connexion,10);
        }
    }

    /**
     * Upgrade a proformat 's statut
     */
    public function updradeStatut($connexion,$statut) : void {
        $query = "update proformat_article set statut=%s where id = %s";
        $query = sprintf($query,$statut,$this -> getId());
        $stmt = $connexion->prepare($query);
        $stmt = $stmt->executeQuery();
    }

    /**
     * Get the proformat not yet send to the financial responsable
     * @param connexion
     * @param id_fournisseur
     * @param  ProformatArticleRepository 
     * @return Collection of all the proformats
     */
    public function getProformatNotSend($connexion,$id_fournisseur, ProformatArticleRepository $proformatArticleRepository):Collection {
        $query = "select * from v_get_proformat_not_send where fournisseur_id = '%s'";
        $query = sprintf($query,$id_fournisseur);
        $stmt = $connexion->prepare($query);
        $stmt = $stmt->executeQuery();
        $proformats = new ArrayCollection();
        while ($row = $stmt ->fetchAssociative()) {
            # code...
            $proformat = $proformatArticleRepository -> find($row['id']) ;
            $proformats -> add($proformat);
        }
        return $proformats;
    }
    /**
     * Generate a proformat per article
     */
    public function generateProformatArticle($connexion, Demande $demande,Fournisseur $fournisseur): void {
        $this -> setId($this->getSequenceId($connexion));
        $this -> setDemande($demande);
        $this -> setFournisseur($fournisseur);
        $this -> setStatut(1);

    }

    public function getSequenceId($connexion): ?int {
        $query = " select nextval('proformat_article_id_seq') as id";
        $stmt = $connexion->prepare($query);
        $stmt = $stmt->executeQuery();
        $row = $stmt ->fetchAssociative();
        $id = $row['id'];
        return $id;
    }
    public function getMontantTotal() : ?float {
        $qte = $this -> getDemande() -> getQuantiteTotal();
        return $qte * $this -> getPrixActuel();
    }
    public function getPrixActuel(): ?int
    {
        return $this->prixActuel;
    }

    public function setPrixActuel(float $prixActuel): static
    {
        $this->prixActuel = $prixActuel;

        return $this;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }
    public function getDemande(): ?Demande
    {
        return $this->demande;
    }

    public function setDemande(Demande $demande): static
    {
        $this->demande = $demande;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): static
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): static
    {
        $this->statut = $statut;

        return $this;
    }
}
