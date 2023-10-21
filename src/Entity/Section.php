<?php

namespace App\Entity;

use App\Repository\SectionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\TestAptitude;

#[ORM\Entity(repositoryClass: SectionRepository::class)]
class Section
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'sections', targetEntity: TestAptitude::class, cascade:["persist", "remove"])]
    #[ORM\JoinColumn(nullable: false)]
    private ?TestAptitude $test_aptitude = null;

    #[ORM\Column(length: 200)]
    private ?string $des_question = null;

    #[ORM\Column]
    private ?int $coef_section = null;

    #[ORM\OneToMany(mappedBy: 'section', targetEntity: ReponseSection::class, cascade:["persist", "remove"])]
    private Collection $reponseSections;

    #[ORM\OneToMany(mappedBy: 'section', targetEntity: SectionReponse::class)]
    private Collection $sectionReponses;

    public function __construct()
    {
        $this->reponseSections = new ArrayCollection();
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

    public function getDesQuestion(): ?string
    {
        return $this->des_question;
    }

    public function setDesQuestion(string $des_question): static
    {
        $this->des_question = $des_question;

        return $this;
    }

    public function getCoefSection(): ?int
    {
        return $this->coef_section;
    }

    public function setCoefSection(int $coef_section): static
    {
        $this->coef_section = $coef_section;

        return $this;
    }

    /**
     * @return Collection<int, ReponseSection>
     */
    public function getReponseSections(): Collection
    {
        return $this->reponseSections;
    }

    public function addReponseSection(ReponseSection $reponseSection): static
    {
        if (!$this->reponseSections->contains($reponseSection)) {
            $this->reponseSections->add($reponseSection);
            $reponseSection->setSection($this);
        }

        return $this;
    }

    public function removeReponseSection(ReponseSection $reponseSection): static
    {
        if ($this->reponseSections->removeElement($reponseSection)) {
            // set the owning side to null (unless already changed)
            if ($reponseSection->getSection() === $this) {
                $reponseSection->setSection(null);
            }
        }

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
            // $sectionReponse->setSection($this);
        }

        return $this;
    }

    public function removeSectionReponse(SectionReponse $sectionReponse): static
    {
        if ($this->sectionReponses->removeElement($sectionReponse)) {
            // set the owning side to null (unless already changed)
            // if ($sectionReponse->getSection() === $this) {
            //     $sectionReponse->setSection(null);
            // }
        }

        return $this;
    }

}
