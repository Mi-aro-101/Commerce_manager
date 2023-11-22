<?php

namespace App\Entity;

use App\Repository\DemandeDepartementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandeDepartementRepository::class)]
class DemandeDepartement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\ManyToOne(inversedBy: 'demandeDepartements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Article $article = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $quantite = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?int $statut = null;


    #[ORM\ManyToOne(inversedBy: 'demandeDepartements')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Demande $demande = null;
    
    #[ORM\ManyToOne(inversedBy: 'demandeDepartements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Service $service = null;

    public function updateStatutAndDemande($connexion,$demande) : void {
        // $this -> setStatut(10);
        // $this -> setDemande($demande);
        $query = "update demande_departement set statut=10, demande_id = %s where id = %s";
        $query = sprintf($query,$demande->getId(),$this -> getId());
        $stmt = $connexion->prepare($query);
        $stmt = $stmt->executeQuery();
    }
    public function getArticleNonTraiteDetails($connexion,$id_article,$articleRepository,$serviceRepository): Collection {
        $query = "select * from v_get_articles_non_traite where article_id = '%s'";
        $query = sprintf($query,$id_article);
        $stmt = $connexion->prepare($query);
        $stmt = $stmt->executeQuery();
        $demandesDepartement = new ArrayCollection();
        while($row = $stmt->fetchAssociative()){
            $demandeDepartement = new DemandeDepartement();
            $demandeDepartement -> setId($row['id']);
            $demandeDepartement -> setArticle($articleRepository -> find($row['article_id']));
            $demandeDepartement -> setService($serviceRepository->find($row['service_id']));

            $date = \DateTime::createFromFormat('Y-m-d',  $row['date']); 
            $demandeDepartement -> setDate($date);

            $demandeDepartement -> setQuantite($row['quantite']);

            $demandesDepartement -> add($demandeDepartement);
        }
        return $demandesDepartement;
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

    public function getQuantite(): ?string
    {
        return $this->quantite;
    }

    public function setQuantite(string $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

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


    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): static
    {
        $this->service = $service;

        return $this;
    }
    public function getDemande(): ?Demande
    {
        return $this->demande;
    }

    public function setDemande(?Demande $Demande): static
    {
        $this->demande = $Demande;

        return $this;
    }
}
