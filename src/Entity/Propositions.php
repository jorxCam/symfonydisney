<?php

namespace App\Entity;

use App\Repository\PropositionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PropositionsRepository::class)]
class Propositions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $revise_id = null;

    #[ORM\Column(nullable: true)]
    private ?int $approuve_id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_approbation = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_revision = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_creation = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_publication = null;

    #[ORM\ManyToOne(inversedBy: 'propositions')]
    private ?user $user_prop = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReviseId(): ?int
    {
        return $this->revise_id;
    }

    public function setReviseId(?int $revise_id): self
    {
        $this->revise_id = $revise_id;

        return $this;
    }

    public function getApprouveId(): ?int
    {
        return $this->approuve_id;
    }

    public function setApprouveId(?int $approuve_id): self
    {
        $this->approuve_id = $approuve_id;

        return $this;
    }

    public function getDateApprobation(): ?\DateTimeInterface
    {
        return $this->date_approbation;
    }

    public function setDateApprobation(?\DateTimeInterface $date_approbation): self
    {
        $this->date_approbation = $date_approbation;

        return $this;
    }

    public function getDateRevision(): ?\DateTimeInterface
    {
        return $this->date_revision;
    }

    public function setDateRevision(?\DateTimeInterface $date_revision): self
    {
        $this->date_revision = $date_revision;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->date_publication;
    }

    public function setDatePublication(?\DateTimeInterface $date_publication): self
    {
        $this->date_publication = $date_publication;

        return $this;
    }

    public function getUserProp(): ?user
    {
        return $this->user_prop;
    }

    public function setUserProp(?user $user_prop): self
    {
        $this->user_prop = $user_prop;

        return $this;
    }
}
