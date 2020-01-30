<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrainingRepository")
 */
class Training
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $naam;

    /**
     * @ORM\Column(type="text")
     */
    private $omschrijving;

    /**
     * @ORM\Column(type="time")
     */
    private $looptijd;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $costs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNaam(): ?string
    {
        return $this->naam;
    }

    public function setNaam(string $naam): self
    {
        $this->naam = $naam;

        return $this;
    }

    public function getOmschrijving(): ?string
    {
        return $this->omschrijving;
    }

    public function setOmschrijving(string $omschrijving): self
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    public function getLooptijd(): ?\DateTimeInterface
    {
        return $this->looptijd;
    }

    public function setLooptijd(\DateTimeInterface $looptijd): self
    {
        $this->looptijd = $looptijd;

        return $this;
    }

    public function getCosts(): ?string
    {
        return $this->costs;
    }

    public function setCosts(?string $costs): self
    {
        $this->costs = $costs;

        return $this;
    }
}
