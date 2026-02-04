<?php

declare(strict_types=1);

namespace App\Entity;

use App\Enum\EducationalPlanStatusEnum;
use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class EducationalPlan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column]
    private string $name;

    #[ORM\Column]
    private float $value = 0.0;

    #[ORM\Column(type: Types::ENUM)]
    private EducationalPlanStatusEnum $status;

    #[ORM\Column(type: 'date')]
    private DateTime $startDate;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?DateTime $endDate = null;

    #[ORM\Column(type: 'date')]
    private DateTime $createdAt;

    #[ORM\Column(type: 'date')]
    private DateTime $updatedAt;

    public function preUpdate(): void
    {
        $this->updatedAt = new DateTime();
    }

    public function prePersist(): void
    {
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
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



    public function getStatus(): EducationalPlanStatusEnum
    {
        return $this->status;
    }

    public function setStatus(EducationalPlanStatusEnum $status): void
    {
        $this->status = $status;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }

    public function getEndDate(): ?DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(?DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }
}
