<?php

namespace App\Entity;

use App\Repository\DemandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandeRepository::class)]
class Demande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Article $article = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $quantiteTotal = null;

    #[ORM\OneToMany(mappedBy: 'demande', targetEntity: DemandeDepartement::class)]
    private Collection $demandeDepartement;

    public function __construct()
    {
        $this->demandeDepartement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): static
    {
        $this->article = $article;

        return $this;
    }

    public function getQuantiteTotal(): ?string
    {
        return $this->quantiteTotal;
    }

    public function setQuantiteTotal(string $quantiteTotal): static
    {
        $this->quantiteTotal = $quantiteTotal;

        return $this;
    }

    /**
     * @return Collection<int, DemandeDepartement>
     */
    public function getDemandeDepartement(): Collection
    {
        return $this->demandeDepartement;
    }

    public function addDemandeDepartement(DemandeDepartement $demandeDepartement): static
    {
        if (!$this->demandeDepartement->contains($demandeDepartement)) {
            $this->demandeDepartement->add($demandeDepartement);
            $demandeDepartement->setDemande($this);
        }

        return $this;
    }

    public function removeDemandeDepartement(DemandeDepartement $demandeDepartement): static
    {
        if ($this->demandeDepartement->removeElement($demandeDepartement)) {
            // set the owning side to null (unless already changed)
            if ($demandeDepartement->getDemande() === $this) {
                $demandeDepartement->setDemande(null);
            }
        }

        return $this;
    }
}
