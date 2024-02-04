<?php

namespace App\Entity;

use App\Repository\BonCommandeDetailRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BonCommandeDetailRepository::class)]
class BonCommandeDetail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'bonCommandeDetails')]
    #[ORM\JoinColumn(nullable: false)]
    private ?BonCommande $bonCommande = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?ProformatArticle $proformatArticle = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prixActuel = null;

    public function montantTotal() {
        $qte_total = $this -> getProformatArticle()->getDemande()->getQuantiteTotal();
        $prix = $this -> getPrixActuel();
        return $qte_total * $prix;
    }

    public function getSequenceBonCommandeDetail($connexion): ?int {
        $query = " select nextval('bon_commande_detail_id_seq') as id";
        $stmt = $connexion->prepare($query);
        $stmt = $stmt->executeQuery();
        $row = $stmt ->fetchAssociative();
        return $row['id'];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): static
    {
        $this->id = $id;

        return $this;
    }
    public function getBonCommande(): ?BonCommande
    {
        return $this->bonCommande;
    }

    public function setBonCommande(?BonCommande $bonCommande): static
    {
        $this->bonCommande = $bonCommande;

        return $this;
    }

    public function getProformatArticle(): ?ProformatArticle
    {
        return $this->proformatArticle;
    }

    public function setProformatArticle(?ProformatArticle $proformatArticle): static
    {
        $this->proformatArticle = $proformatArticle;

        return $this;
    }

    public function getPrixActuel(): ?string
    {
        return $this->prixActuel;
    }

    public function setPrixActuel(string $prixActuel): static
    {
        $this->prixActuel = $prixActuel;

        return $this;
    }
}
