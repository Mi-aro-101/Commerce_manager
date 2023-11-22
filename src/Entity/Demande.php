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
 
    public function getPrixTotal() {
        return $this-> getQuantiteTotal() * ($this->getArticle);
    }
    public function getArticlesNonTraites($connexion, $articleRepository) : Collection {
        $query = "select * from v_get_articles_non_traite_groupe";
        $stmt = $connexion->prepare($query);
        $stmt = $stmt->executeQuery();
        $demandes = new ArrayCollection();
        while ($row = $stmt->fetchAssociative()) {
            $demande = new Demande();
            $demande -> setQuantiteTotal($row['quantite_total']);
            $demande -> setArticle($articleRepository->find($row['article_id']));
            $demandes->add($demande);
        }
        return $demandes;
    }
    public function toSaveDemande($connexion, $id_article,$articleRepository) : Demande {
        $demande = $this ->getArticleNonTraite($connexion, $id_article,$articleRepository);
        $demande -> setId($this -> getSequenceDemande($connexion,$articleRepository));
        return $demande;
    }
    public function getArticleNonTraite($connexion, $id_article,$articleRepository) : Demande {
        $query = "select * from v_get_articles_non_traite_groupe where article_id = '%s'";
        $query = sprintf($query,$id_article);
        $stmt = $connexion->prepare($query);
        $stmt = $stmt->executeQuery();
        $demande = new Demande();
        while ($row = $stmt->fetchAssociative()) {
            $demande -> setQuantiteTotal($row['quantite_total']);
            $demande -> setArticle($articleRepository->find($row['article_id']));
        }
        return $demande;
    }
    
    public function getSequenceDemande($connexion,$articleRepository): ?int {
        $query = " select nextval('demande_id_seq') as id";
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
