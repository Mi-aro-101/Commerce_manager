<?php

namespace App\Entity;

use App\Repository\CVCandidatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CVCandidatRepository::class)]
class CVCandidat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'cVCandidats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?CVRequirements $cvrequirements = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_depot = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_reponse = null;

    #[ORM\Column]
    private ?int $statue = null;

    #[ORM\ManyToOne(inversedBy: 'cVCandidats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Domaine $domaine = null;

    #[ORM\ManyToOne(inversedBy: 'cVCandidats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Diplome $diplome = null;

    #[ORM\ManyToOne(inversedBy: 'cVCandidats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Experience $experience = null;

    #[ORM\ManyToOne(inversedBy: 'cVCandidats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Sexe $sexe = null;

    #[ORM\ManyToOne(inversedBy: 'cVCandidats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Nationalite $nationalite = null;

    #[ORM\ManyToOne(inversedBy: 'cVCandidats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Adresse $adresse = null;

    #[ORM\ManyToOne(inversedBy: 'cVCandidats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Matrimoniale $Matrimoniale = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCvrequirements(): ?CVRequirements
    {
        return $this->cvrequirements;
    }

    public function setCvrequirements(?CVRequirements $cvrequirements): static
    {
        $this->cvrequirements = $cvrequirements;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getDateDepot(): ?\DateTimeInterface
    {
        return $this->date_depot;
    }

    public function setDateDepot(\DateTimeInterface $date_depot): static
    {
        $this->date_depot = $date_depot;

        return $this;
    }

    public function getDateReponse(): ?\DateTimeInterface
    {
        return $this->date_reponse;
    }

    public function setDateReponse(\DateTimeInterface $date_reponse): static
    {
        $this->date_reponse = $date_reponse;

        return $this;
    }

    public function getStatue(): ?int
    {
        return $this->statue;
    }

    public function setStatue(int $statue): static
    {
        $this->statue = $statue;

        return $this;
    }

    public function getDomaine(): ?Domaine
    {
        return $this->domaine;
    }

    public function setDomaine(?Domaine $domaine): static
    {
        $this->domaine = $domaine;

        return $this;
    }

    public function getDiplome(): ?Diplome
    {
        return $this->diplome;
    }

    public function setDiplome(?Diplome $diplome): static
    {
        $this->diplome = $diplome;

        return $this;
    }

    public function getExperience(): ?Experience
    {
        return $this->experience;
    }

    public function setExperience(?Experience $experience): static
    {
        $this->experience = $experience;

        return $this;
    }

    public function getSexe(): ?Sexe
    {
        return $this->sexe;
    }

    public function setSexe(?Sexe $Sexe): static
    {
        $this->sexe = $Sexe;

        return $this;
    }

    public function getNationalite(): ?Nationalite
    {
        return $this->nationalite;
    }

    public function setNationalite(?Nationalite $Nationalite): static
    {
        $this->nationalite = $Nationalite;

        return $this;
    }

    public function getAdresse(): ?Adresse
    {
        return $this->adresse;
    }

    public function setAdresse(?Adresse $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getMatrimoniale(): ?Matrimoniale
    {
        return $this->Matrimoniale;
    }

    public function setMatrimoniale(?Matrimoniale $Matrimoniale): static
    {
        $this->Matrimoniale = $Matrimoniale;

        return $this;
    }
}
