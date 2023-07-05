<?php

namespace App\Entity;
use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VoitureRepository::class)]
#[ORM\Table(name:"voitures")]
class Voiture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id;

    #[ORM\Column(type: "string",length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(type: "string",length: 255, nullable: true)]
    private ?string $modele = null;

    #[ORM\Column(type: "string",length: 255, nullable: true)]
    private ?string $color = null;

    #[ORM\Column(type: "string",length: 255, nullable: true)]
    private ?string $number = null;

     #[ORM\Column(type: "string",length: 255, nullable: true)]
    private ?string $marque = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId( ?int $id): static
    {
        $this->id = $id;
        
        return $this;

    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): static
    {
        $this->number = $number;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(?string $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

}