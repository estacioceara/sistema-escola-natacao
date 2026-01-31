<?php

class Student
{
    private string $name;
    private DateTime $birthDate;
    private ?string $cpf;
    private string $phone;
    private string $notes;

    private Address $address;
    private Guardian $guardian;
    private Enrollment $enrollment;

    public function __construct(
        string $name,
        DateTime $birthDate,
        ?string $cpf,
        string $phone,
        string $notes,
        Address $address,
        Guardian $guardian,
        Enrollment $enrollment
    ) {
        $this->name = $name;
        $this->birthDate = $birthDate;
        $this->cpf = $cpf;
        $this->phone = $phone;
        $this->notes = $notes;
        $this->address = $address;
        $this->guardian = $guardian;
        $this->enrollment = $enrollment;
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

    public function getGuardian(): Guardian
    {
        return $this->guardian;
    }

    public function setGuardian(Guardian $guardian): void
    {
        $this->guardian = $guardian;
    }

    public function getEnrollment(): Enrollment
    {
        return $this->enrollment;
    }

    public function setEnrollment(Enrollment $enrollment): void
    {
        $this->enrollment = $enrollment;
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
