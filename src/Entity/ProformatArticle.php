<?php

namespace App\Entity;

use App\Repository\ProformatArticleRepository;
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

    /**
     * Get the proformat not yet send to the financial responsable
     */
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
