<?php

declare(strict_types=1);

namespace App\Entity;

use App\Enum\EducationalPlanStatusEnum;
use DateTime;

class Teacher
{
    private ?int $id = null;

    private string $name;

    private ?string $cpf = null;

    private string $category;

    private Address $address;

    private array $shifts = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(?string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    public function getShifts(): array
    {
        return $this->shifts;
    }

    public function setShifts(array $shifts): void
    {
        $this->shifts = $shifts;
    }
}
