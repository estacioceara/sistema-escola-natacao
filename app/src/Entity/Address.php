<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Address
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column]
    private int $id;

    #[ORM\Column(nullable: true)]
    private ?string $street = null;

    #[ORM\Column(nullable: true)]
    private ?string $number = null;

    #[ORM\Column(nullable: true)]
    private ?string $complement = null;

    #[ORM\Column(nullable: true)]
    private ?string $neighborhood = null;

    #[ORM\Column(nullable: true)]
    private ?string $city = null;

    #[ORM\Column(nullable: true, length: 2)]
    private ?string $state = null;

    #[ORM\Column(nullable: true, length: 8)]
    private ?string $zipCode = null;

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    public function getComplement(): ?string
    {
        return $this->complement;
    }

    public function setComplement(string $complement): void
    {
        $this->complement = $complement;
    }

    public function getNeighborhood(): ?string
    {
        return $this->neighborhood;
    }

    public function setNeighborhood(string $neighborhood): void
    {
        $this->neighborhood = $neighborhood;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(string $zipCode): void
    {
        // Remove tudo que não seja número (hífen, espaços, etc.)
        $this->zipCode = preg_replace('/\D/', '', $zipCode);
    }

    public function fill(array $data): void
    {
        $this->street = $data['street'] ?? null;
        $this->number = (string) ($data['number'] ?? null);
        $this->city = $data['city'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->neighborhood = $data['neighborhood'] ?? null;
        
        // Sanitiza o CEP removendo hífen e outros caracteres não numéricos
        $zipCode = $data['zipcode'] ?? null;
        $this->zipCode = $zipCode ? preg_replace('/\D/', '', $zipCode) : null;
    }
}
