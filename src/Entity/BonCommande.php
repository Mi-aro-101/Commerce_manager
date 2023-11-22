<?php

namespace App\Entity;

use App\Repository\BonCommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BonCommandeRepository::class)]
class BonCommande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateLivraison = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Fournisseur $fournisseur = null;

    #[ORM\OneToMany(mappedBy: 'bonCommande', targetEntity: BonCommandeDetail::class)]
    private Collection $bonCommandeDetails;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateEnvoi = null;

    public function __construct()
    {
        $this->bonCommandeDetails = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->dateLivraison;
    }

    public function setDateLivraison(\DateTimeInterface $dateLivraison): static
    {
        $this->dateLivraison = $dateLivraison;

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

    /**
     * @return Collection<int, BonCommandeDetail>
     */
    public function getBonCommandeDetails(): Collection
    {
        return $this->bonCommandeDetails;
    }

    public function addBonCommandeDetail(BonCommandeDetail $bonCommandeDetail): static
    {
        if (!$this->bonCommandeDetails->contains($bonCommandeDetail)) {
            $this->bonCommandeDetails->add($bonCommandeDetail);
            $bonCommandeDetail->setBonCommande($this);
        }

        return $this;
    }

    public function removeBonCommandeDetail(BonCommandeDetail $bonCommandeDetail): static
    {
        if ($this->bonCommandeDetails->removeElement($bonCommandeDetail)) {
            // set the owning side to null (unless already changed)
            if ($bonCommandeDetail->getBonCommande() === $this) {
                $bonCommandeDetail->setBonCommande(null);
            }
        }

        return $this;
    }

    public function getDateEnvoi(): ?\DateTimeInterface
    {
        return $this->dateEnvoi;
    }

    public function setDateEnvoi(\DateTimeInterface $dateEnvoi): static
    {
        $this->dateEnvoi = $dateEnvoi;

        return $this;
    }
}
