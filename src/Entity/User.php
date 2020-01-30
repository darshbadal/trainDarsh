<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
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
    private $loginnaam;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $wachtwoord;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $voornaam;

    /**
     * @ORM\Column(type="boolean")
     */
    private $preprovision;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $achternaam;

    /**
     * @ORM\Column(type="date")
     */
    private $geboortedatum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $huurdatum;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $salaris;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $straat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $postcode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $plaats;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLoginnaam(): ?string
    {
        return $this->loginnaam;
    }

    public function setLoginnaam(string $loginnaam): self
    {
        $this->loginnaam = $loginnaam;

        return $this;
    }

    public function getWachtwoord(): ?string
    {
        return $this->wachtwoord;
    }

    public function setWachtwoord(string $wachtwoord): self
    {
        $this->wachtwoord = $wachtwoord;

        return $this;
    }

    public function getVoornaam(): ?string
    {
        return $this->voornaam;
    }

    public function setVoornaam(string $voornaam): self
    {
        $this->voornaam = $voornaam;

        return $this;
    }

    public function getPreprovision(): ?bool
    {
        return $this->preprovision;
    }

    public function setPreprovision(bool $preprovision): self
    {
        $this->preprovision = $preprovision;

        return $this;
    }

    public function getAchternaam(): ?string
    {
        return $this->achternaam;
    }

    public function setAchternaam(string $achternaam): self
    {
        $this->achternaam = $achternaam;

        return $this;
    }

    public function getGeboortedatum(): ?\DateTimeInterface
    {
        return $this->geboortedatum;
    }

    public function setGeboortedatum(\DateTimeInterface $geboortedatum): self
    {
        $this->geboortedatum = $geboortedatum;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getHuurdatum(): ?\DateTimeInterface
    {
        return $this->huurdatum;
    }

    public function setHuurdatum(?\DateTimeInterface $huurdatum): self
    {
        $this->huurdatum = $huurdatum;

        return $this;
    }

    public function getSalaris(): ?string
    {
        return $this->salaris;
    }

    public function setSalaris(?string $salaris): self
    {
        $this->salaris = $salaris;

        return $this;
    }

    public function getStraat(): ?string
    {
        return $this->straat;
    }

    public function setStraat(?string $straat): self
    {
        $this->straat = $straat;

        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(?string $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function getPlaats(): ?string
    {
        return $this->plaats;
    }

    public function setPlaats(?string $plaats): self
    {
        $this->plaats = $plaats;

        return $this;
    }
}
