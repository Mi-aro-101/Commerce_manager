<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $des_fournisseur = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?ModePaiment $mode_paiment = null;

    #[ORM\OneToMany(mappedBy: 'fournisseur', targetEntity: ArticleFournisseur::class)]
    private Collection $articleFournisseurs;

    public function __construct()
    {
        $this->articleFournisseurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesFournisseur(): ?string
    {
        return $this->des_fournisseur;
    }

    public function setDesFournisseur(string $des_fournisseur): static
    {
        $this->des_fournisseur = $des_fournisseur;

        return $this;
    }

    public function getModePaiment(): ?ModePaiment
    {
        return $this->mode_paiment;
    }

    public function setModePaiment(?ModePaiment $mode_paiment): static
    {
        $this->mode_paiment = $mode_paiment;

        return $this;
    }

    /**
     * @return Collection<int, ArticleFournisseur>
     */
    public function getArticleFournisseurs(): Collection
    {
        return $this->articleFournisseurs;
    }

    public function addArticleFournisseur(ArticleFournisseur $articleFournisseur): static
    {
        if (!$this->articleFournisseurs->contains($articleFournisseur)) {
            $this->articleFournisseurs->add($articleFournisseur);
            $articleFournisseur->setFournisseur($this);
        }

        return $this;
    }

    public function removeArticleFournisseur(ArticleFournisseur $articleFournisseur): static
    {
        if ($this->articleFournisseurs->removeElement($articleFournisseur)) {
            // set the owning side to null (unless already changed)
            if ($articleFournisseur->getFournisseur() === $this) {
                $articleFournisseur->setFournisseur(null);
            }
        }

        return $this;
    }
}
