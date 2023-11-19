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
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $des_article = null;

    #[ORM\OneToMany(mappedBy: 'article', targetEntity: ArticleFournisseur::class)]
    private Collection $articleFournisseurs;

    public function __construct()
    {
        $this->articleFournisseurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
}
