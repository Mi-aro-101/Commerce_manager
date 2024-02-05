<?php

namespace App\Entity;

use App\Repository\BonLivraisonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BonLivraisonRepository::class)]
class BonLivraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'bonLivraisons')]
    #[ORM\JoinColumn(nullable: false)]
    private ?BonCommande $bonCommande = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateLivraison = null;

    #[ORM\Column(length: 50)]
    private ?string $bonReceptionRef = null;

    #[ORM\OneToMany(mappedBy: 'bonLivraison', targetEntity: BonReception::class)]
    private Collection $bonReceptions;

    public function __construct()
    {
        $this->bonReceptions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBonCommande(): ?BonCommande
    {
        return $this->bonCommande;
    }

    public function setBonCommande(?BonCommande $bonCommande): static
    {
        $this->bonCommande = $bonCommande;

        return $this;
    }

    public function setId($id) : static
    {
        $this->id = $id;
        return $this;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->dateLivraison;
    }

    public function setDateLivraison(\DateTimeInterface $dateLivraison): static
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    public function getBonReceptionRef(): ?string
    {
        return $this->bonReceptionRef;
    }

    public function setBonReceptionRef(string $bonReceptionRef): static
    {
        $this->bonReceptionRef = $bonReceptionRef;

        return $this;
    }

    public function getBonLivraisonSeq($entityManager) : int{

        $connexion = $entityManager->getConnection();
        $query = "SELECT nextval('bon_livraison_id_seq') as id";
        $stmt = $connexion->prepare($query);
        $stmt = $stmt->executeQuery();
        $row = $stmt->fetchassociative();

        return $row["id"];
    }

    /**
     * @return Collection<int, BonReception>
     */
    public function getBonReceptions(): Collection
    {
        return $this->bonReceptions;
    }

    public function addBonReception(BonReception $bonReception): static
    {
        if (!$this->bonReceptions->contains($bonReception)) {
            $this->bonReceptions->add($bonReception);
            $bonReception->setBonLivraison($this);
        }

        return $this;
    }

    public function removeBonReception(BonReception $bonReception): static
    {
        if ($this->bonReceptions->removeElement($bonReception)) {
            // set the owning side to null (unless already changed)
            if ($bonReception->getBonLivraison() === $this) {
                $bonReception->setBonLivraison(null);
            }
        }

        return $this;
    }
}
