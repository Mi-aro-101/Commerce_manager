<?php

namespace App\Entity;

use App\Repository\TestResultatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestResultatRepository::class)]
class TestResultat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
  
    #[ORM\ManyToOne(inversedBy: 'testResultats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TestAptitude $test_aptitude = null;

    #[ORM\ManyToOne(inversedBy: 'testResultats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_envoie = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_reponse = null;

    #[ORM\Column]
    private ?int $statut = null;

    #[ORM\OneToMany(mappedBy: 'test_resultat', targetEntity: SectionReponse::class)]
    private Collection $sectionReponses;

    public function __construct()
    {
        $this->sectionReponses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getTestAptitude(): ?TestAptitude
    {
        return $this->test_aptitude;
    }

    public function setTestAptitude(?TestAptitude $test_aptitude): static
    {
        $this->test_aptitude = $test_aptitude;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getDateEnvoie(): ?\DateTimeInterface
    {
        return $this->date_envoie;
    }

    public function setDateEnvoie(\DateTimeInterface $date_envoie): static
    {
        $this->date_envoie = $date_envoie;

        return $this;
    }

    public function getDateReponse(): ?\DateTimeInterface
    {
        return $this->date_reponse;
    }

    public function setDateReponse(?\DateTimeInterface $date_reponse): static
    {
        $this->date_reponse = $date_reponse;

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

    /**
     * @return Collection<int, SectionReponse>
     */
    public function getSectionReponses(): Collection
    {
        return $this->sectionReponses;
    }

    public function addSectionReponse(SectionReponse $sectionReponse): static
    {
        if (!$this->sectionReponses->contains($sectionReponse)) {
            $this->sectionReponses->add($sectionReponse);
            $sectionReponse->setTestResultat($this);
        }

        return $this;
    }

    public function removeSectionReponse(SectionReponse $sectionReponse): static
    {
        if ($this->sectionReponses->removeElement($sectionReponse)) {
            // set the owning side to null (unless already changed)
            if ($sectionReponse->getTestResultat() === $this) {
                $sectionReponse->setTestResultat(null);
            }
        }

        return $this;
    }

}
