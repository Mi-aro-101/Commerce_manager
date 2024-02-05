<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use App\Repository\BonReceptionRepository;
use App\Repository\ImmobilisationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityManagerInterface;
use PhpParser\Node\Expr\Cast\Double;

#[ORM\Entity(repositoryClass: ImmobilisationRepository::class)]
class Immobilisation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'immobilisations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Article $article = null;

    #[ORM\Column]
    private ?int $etat_avance = null;

    #[ORM\Column(type: Types::FLOAT)]
    private ?float $taux_amortissement = null;

    #[ORM\ManyToOne(inversedBy: 'immobilisations')]
    private ?BonReception $bonReception = null;

    #[ORM\OneToMany(mappedBy: 'immobilisation', targetEntity: ImmobilisationPermission::class)]
    private Collection $immobilisationPermissions;

    public function __construct()
    {
        $this->immobilisationPermissions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId($id) : static
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

    public function getEtatAvance(): ?int
    {
        return $this->etat_avance;
    }

    public function setEtatAvance(int $etat_avance): static
    {
        $this->etat_avance = $etat_avance;

        return $this;
    }

    public function getTauxAmortissement(): ?string
    {
        return $this->taux_amortissement;
    }

    public function setTauxAmortissement(float $taux_amortissement): static
    {
        $this->taux_amortissement = $taux_amortissement;

        return $this;
    }

    public function getBonReception(): ?BonReception
    {
        return $this->bonReception;
    }

    public function setBonReception(?BonReception $bonReception): static
    {
        $this->bonReception = $bonReception;

        return $this;
    }

    public function getImmobilisations($bonReception, $taux_amortissement) : Collection
    {
        $collection = new ArrayCollection();

        foreach ($bonReception->getBonLivraison()->getBonCommande()->getBonCommandeDetails() as $details){
            for($i = 0 ; $i < $details->getProformatArticle()->getDemande()->getQuantiteTotal() ; $i++){
                $immobilisation = new Immobilisation();
                $article = $details->getProformatArticle()->getDemande()->getArticle();
                $immobilisation->setArticle($article);
                $immobilisation->setTauxAmortissement($taux_amortissement);
                $immobilisation->setEtatAvance(0);
                $immobilisation->setBonReception($bonReception);

                $collection->add($immobilisation);
                $bonReception->addImmobilisation($immobilisation);
            }
        }

        return $collection;
    }

    public function getImmobilisationNonTraites(EntityManagerInterface $entityManager, ArticleRepository $articleRepository, BonReceptionRepository $bonReceptionRepository) : Collection
    {
        $connection = $entityManager->getConnection();
        $response = new ArrayCollection();
        $query = "SELECT * FROM v_immobilisation_non_traite";
        $statement = $connection->prepare($query);
        $stmt = $statement->executeQuery();
        while($row = $stmt->fetchAssociative()){
            $immobilisation = new Immobilisation();

            $immobilisation->setId($row["id"]);
            $immobilisation->setArticle($articleRepository->find($row["article_id"]));
            $immobilisation->setBonReception($bonReceptionRepository->find($row["bon_reception_id"]));
            $immobilisation->setEtatAvance($row["etat_avance"]);
            $immobilisation->setTauxAmortissement($row["taux_amortissement"]);

            $response->add($immobilisation);
        }

        return $response;
    }

    public function getImmobilisationTraites(EntityManagerInterface $entityManager, ArticleRepository $articleRepository, BonReceptionRepository $bonReceptionRepository) : Collection
    {
        $connection = $entityManager->getConnection();
        $response = new ArrayCollection();
        $query = "SELECT * FROM v_immobilisation_traite";
        $statement = $connection->prepare($query);
        $stmt = $statement->executeQuery();
        while($row = $stmt->fetchAssociative()){
            $immobilisation = new Immobilisation();

            $immobilisation->setId($row["id"]);
            $immobilisation->setArticle($articleRepository->find($row["article_id"]));
            $immobilisation->setBonReception($bonReceptionRepository->find($row["bon_reception_id"]));
            $immobilisation->setEtatAvance($row["etat_avance"]);
            $immobilisation->setTauxAmortissement($row["taux_amortissement"]);

            $response->add($immobilisation);
        }

        return $response;
    }

    /**
     * @return Collection<int, ImmobilisationPermission>
     */
    public function getImmobilisationPermissions(): Collection
    {
        return $this->immobilisationPermissions;
    }

    public function addImmobilisationPermission(ImmobilisationPermission $immobilisationPermission): static
    {
        if (!$this->immobilisationPermissions->contains($immobilisationPermission)) {
            $this->immobilisationPermissions->add($immobilisationPermission);
            $immobilisationPermission->setImmobilisation($this);
        }

        return $this;
    }

    public function removeImmobilisationPermission(ImmobilisationPermission $immobilisationPermission): static
    {
        if ($this->immobilisationPermissions->removeElement($immobilisationPermission)) {
            // set the owning side to null (unless already changed)
            if ($immobilisationPermission->getImmobilisation() === $this) {
                $immobilisationPermission->setImmobilisation(null);
            }
        }

        return $this;
    }
}
