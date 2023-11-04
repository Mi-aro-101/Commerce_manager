<?php

namespace App\Entity;

use App\Repository\EmployeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeRepository::class)]
class Employe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'employe', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_embauche = null;

    #[ORM\Column]
    private ?bool $cnaps = null;

    #[ORM\Column]
    private ?bool $osti = null;

    #[ORM\ManyToOne(targetEntity: self::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?self $superieur = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $salaire = null;

    #[ORM\ManyToMany(targetEntity: HistoriqueSalaire::class, mappedBy: 'employe')]
    private Collection $historiqueSalaires;

    #[ORM\OneToMany(mappedBy: 'employe', targetEntity: Conge::class)]
    private Collection $conges;

    public function __construct()
    {
        $this->historiqueSalaires = new ArrayCollection();
        $this->conges = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDateEmbauche(): ?\DateTimeInterface
    {
        return $this->date_embauche;
    }

    public function setDateEmbauche(\DateTimeInterface $date_embauche): static
    {
        $this->date_embauche = $date_embauche;

        return $this;
    }

    public function isCnaps(): ?bool
    {
        return $this->cnaps;
    }

    public function setCnaps(bool $cnaps): static
    {
        $this->cnaps = $cnaps;

        return $this;
    }

    public function isOsti(): ?bool
    {
        return $this->osti;
    }

    public function setOsti(bool $osti): static
    {
        $this->osti = $osti;

        return $this;
    }

    public function getSuperieur(): ?self
    {
        return $this->superieur;
    }

    public function setSuperieur(?self $superieur): static
    {
        $this->superieur = $superieur;

        return $this;
    }

    public function getSalaire(): ?string
    {
        return $this->salaire;
    }

    public function setSalaire(string $salaire): static
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * @return Collection<int, HistoriqueSalaire>
     */
    public function getHistoriqueSalaires(): Collection
    {
        return $this->historiqueSalaires;
    }

    public function addHistoriqueSalaire(HistoriqueSalaire $historiqueSalaire): static
    {
        if (!$this->historiqueSalaires->contains($historiqueSalaire)) {
            $this->historiqueSalaires->add($historiqueSalaire);
            $historiqueSalaire->addEmploye($this);
        }

        return $this;
    }

    public function removeHistoriqueSalaire(HistoriqueSalaire $historiqueSalaire): static
    {
        if ($this->historiqueSalaires->removeElement($historiqueSalaire)) {
            $historiqueSalaire->removeEmploye($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Conge>
     */
    public function getConges(): Collection
    {
        return $this->conges;
    }

    public function addConge(Conge $conge): static
    {
        if (!$this->conges->contains($conge)) {
            $this->conges->add($conge);
            $conge->setEmploye($this);
        }

        return $this;
    }

    public function removeConge(Conge $conge): static
    {
        if ($this->conges->removeElement($conge)) {
            // set the owning side to null (unless already changed)
            if ($conge->getEmploye() === $this) {
                $conge->setEmploye(null);
            }
        }

        return $this;
    }

    public function getManagerProperyvalue(): string
    {
        $result = "Pas de superieur";

        if($this->getSuperieur() != null){
            $result = $this->getSuperieur()->getUtilisateur()->getNomUtilisateur()." ".$this->getSuperieur()->getUtilisateur()->getPrenomUtilisateur();
        }

        return $result;
    }
}
