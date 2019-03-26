<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TruckRepository")
 */
class Truck
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $kenteken;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Merk;

    /**
     * @ORM\Column(type="integer")
     */
    private $Bouwjaar;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKenteken(): ?string
    {
        return $this->kenteken;
    }

    public function setKenteken(string $kenteken): self
    {
        $this->kenteken = $kenteken;

        return $this;
    }

    public function getMerk(): ?string
    {
        return $this->Merk;
    }

    public function setMerk(string $Merk): self
    {
        $this->Merk = $Merk;

        return $this;
    }

    public function getBouwjaar(): ?int
    {
        return $this->Bouwjaar;
    }

    public function setBouwjaar(int $Bouwjaar): self
    {
        $this->Bouwjaar = $Bouwjaar;

        return $this;
    }
}
