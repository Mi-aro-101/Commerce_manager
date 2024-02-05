<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\Column (length: 15)]
    private ?string $id = null;

    #[ORM\Column(length: 100)]
    private ?string $des_article = null;

    #[ORM\OneToMany(mappedBy: 'article', targetEntity: ArticleFournisseur::class)]
    private Collection $articleFournisseurs;

    #[ORM\OneToMany(mappedBy: 'article', targetEntity: DemandeDepartement::class)]
    private Collection $demandeDepartements;

    #[ORM\OneToMany(mappedBy: 'article', targetEntity: Immobilisation::class)]
    private Collection $immobilisations;

    public function __construct()
    {
        $this->articleFournisseurs = new ArrayCollection();
        $this->demandeDepartements = new ArrayCollection();
        $this->immobilisations = new ArrayCollection();
    }

    public function getId(): ?string
    {
        return $this->id;
    }
    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getDesArticle(): ?string
    {
        return $this->des_article;
    }

    public function setDesArticle(string $des_article): static
    {
        $this->des_article = $des_article;

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
            $articleFournisseur->setArticle($this);
        }

        return $this;
    }

    public function removeArticleFournisseur(ArticleFournisseur $articleFournisseur): static
    {
        if ($this->articleFournisseurs->removeElement($articleFournisseur)) {
            // set the owning side to null (unless already changed)
            if ($articleFournisseur->getArticle() === $this) {
                $articleFournisseur->setArticle(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, DemandeDepartement>
     */
    public function getDemandeDepartements(): Collection
    {
        return $this->demandeDepartements;
    }

    public function addDemandeDepartement(DemandeDepartement $demandeDepartement): static
    {
        if (!$this->demandeDepartements->contains($demandeDepartement)) {
            $this->demandeDepartements->add($demandeDepartement);
            $demandeDepartement->setArticle($this);
        }

        return $this;
    }

    public function removeDemandeDepartement(DemandeDepartement $demandeDepartement): static
    {
        if ($this->demandeDepartements->removeElement($demandeDepartement)) {
            // set the owning side to null (unless already changed)
            if ($demandeDepartement->getArticle() === $this) {
                $demandeDepartement->setArticle(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Immobilisation>
     */
    public function getImmobilisations(): Collection
    {
        return $this->immobilisations;
    }

    public function addImmobilisation(Immobilisation $immobilisation): static
    {
        if (!$this->immobilisations->contains($immobilisation)) {
            $this->immobilisations->add($immobilisation);
            $immobilisation->setArticle($this);
        }

        return $this;
    }

    public function removeImmobilisation(Immobilisation $immobilisation): static
    {
        if ($this->immobilisations->removeElement($immobilisation)) {
            // set the owning side to null (unless already changed)
            if ($immobilisation->getArticle() === $this) {
                $immobilisation->setArticle(null);
            }
        }

        return $this;
    }
}
