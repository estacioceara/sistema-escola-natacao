<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
class Student
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column]
    private int $id ;

    #[ORM\Column(length: 100)]
    private string $name;

    #[ORM\Column(type: 'date')]
    private DateTime $birthDate;

    #[ORM\Column(length: 11, nullable: true)]
    private ?string $cpf;

    #[ORM\Column(length: 20)]
    private string $phone;

    #[ORM\Column(length: 255)]
    private string $notes;

    private Address $address;
    private StudentResponsible $studentResponsible;

    public function __construct(
        string $name,
        DateTime $birthDate,
        ?string $cpf,
        string $phone,
        string $notes,
        Address $address,
        StudentResponsible $studentResponsible,
    ) {
        $this->name = $name;
        $this->birthDate = $birthDate;
        $this->cpf = $cpf;
        $this->phone = $phone;
        $this->notes = $notes;
        $this->address = $address;
        $this->studentResponsible = $studentResponsible;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getBirthDate(): DateTime
    {
        return $this->birthDate;
    }

    public function setBirthDate(DateTime $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(?string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getNotes(): string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): void
    {
        $this->notes = $notes;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    public function getStudentResponsible(): StudentResponsible
    {
        return $this->studentResponsible;
    }

    public function setStudentResponsible(StudentResponsible $studentResponsible): void
    {
        $this->studentResponsible = $studentResponsible;
    }

    public function enroll(): void
    {
        // 
    }

    public function update(array $data): void
    {
        // 
    }

    public function fetchInformation(): array
    {
        // 
        return [];
    }

    public function markAttendance(): void
    {
        // 
    }
}
