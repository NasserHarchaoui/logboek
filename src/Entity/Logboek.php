<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LogboekRepository")
 */
class Logboek
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $userID;

    /**
     * @ORM\Column(type="integer")
     */
    private $brief_nr;

    /**
     * @ORM\Column(type="date")
     */
    private $datum;

    /**
     * @ORM\Column(type="integer")
     */
    private $chauffeurId;

    /**
     * @ORM\Column(type="integer")
     */
    private $truckId;

    /**
     * @ORM\Column(type="float")
     */
    private $kubs;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $laadplaats;

    /**
     * @ORM\Column(type="datetime")
     */
    private $vertrektijd;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $bestemming;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $evenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserID(): ?int
    {
        return $this->userID;
    }

    public function setUserID(int $userID): self
    {
        $this->userID = $userID;

        return $this;
    }

    public function getBriefNr(): ?int
    {
        return $this->brief_nr;
    }

    public function setBriefNr(int $brief_nr): self
    {
        $this->brief_nr = $brief_nr;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getChauffeurId(): ?int
    {
        return $this->chauffeurId;
    }

    public function setChauffeurId(int $chauffeurId): self
    {
        $this->chauffeurId = $chauffeurId;

        return $this;
    }

    public function getTruckId(): ?int
    {
        return $this->truckId;
    }

    public function setTruckId(int $truckId): self
    {
        $this->truckId = $truckId;

        return $this;
    }

    public function getKubs(): ?float
    {
        return $this->kubs;
    }

    public function setKubs(float $kubs): self
    {
        $this->kubs = $kubs;

        return $this;
    }

    public function getLaadplaats(): ?string
    {
        return $this->laadplaats;
    }

    public function setLaadplaats(string $laadplaats): self
    {
        $this->laadplaats = $laadplaats;

        return $this;
    }

    public function getVertrektijd(): ?\DateTimeInterface
    {
        return $this->vertrektijd;
    }

    public function setVertrektijd(\DateTimeInterface $vertrektijd): self
    {
        $this->vertrektijd = $vertrektijd;

        return $this;
    }

    public function getBestemming(): ?string
    {
        return $this->bestemming;
    }

    public function setBestemming(string $bestemming): self
    {
        $this->bestemming = $bestemming;

        return $this;
    }

    public function getEvenement(): ?string
    {
        return $this->evenement;
    }

    public function setEvenement(string $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }
}
