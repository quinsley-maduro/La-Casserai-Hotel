<?php

namespace App\Entity;

use App\Repository\KamerRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=KamerRepository::class)
 * @vich\uploadable()
 */
class Kamer
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
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Room_nr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prijs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Bed;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Omschrijving;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ImageName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Beschikbaar;


    /**
     * vich\uploadablefield(mapping="Kamer_thumbnails", filenameproperty="thumbnail" )
     */
    private $thumbnailFile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getRoomNr(): ?string
    {
        return $this->Room_nr;
    }

    public function setRoomNr(string $Room_nr): self
    {
        $this->Room_nr = $Room_nr;

        return $this;
    }

    public function getPrijs(): ?string
    {
        return $this->Prijs;
    }

    public function setPrijs(string $Prijs): self
    {
        $this->Prijs = $Prijs;

        return $this;
    }

    public function getBed(): ?string
    {
        return $this->Bed;
    }

    public function setBed(string $Bed): self
    {
        $this->Bed = $Bed;

        return $this;
    }

    public function getOmschrijving(): ?string
    {
        return $this->Omschrijving;
    }

    public function setOmschrijving(string $Omschrijving): self
    {
        $this->Omschrijving = $Omschrijving;

        return $this;
    }

    public function getImageName(): ?string
    {
        return $this->ImageName;
    }

    public function setImageName(string $ImageName): self
    {
        $this->ImageName = $ImageName;

        return $this;
    }

    public function getBeschikbaar(): ?string
    {
        return $this->Beschikbaar;
    }

    public function setBeschikbaar(string $Beschikbaar): self
    {
        $this->Beschikbaar = $Beschikbaar;

        return $this;
    }
}
