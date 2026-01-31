<?php

declare(strict_types=1);
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

#[ORM\Entity]
class MonthlyFee
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private int $id;
    #[ORM\Column()]
    private float $value;
    private Student $student;
    #[ORM\Column(options: ['default' => false])]
    private bool $paid = false;
    #[ORM\Column()]
    private DateTime $dueDate;
    #[ORM\Column(nullable: true)]
    private ?DateTime $paymentDate;
    #[ORM\Column(length: 20)]
    private string $billingPeriod;

    public function __construct(
        float $value,
        Student $student,
        DateTime $dueDate,
        string $billingPeriod
    ) {
        $this->value = $value;
        $this->student = $student;
        $this->dueDate = $dueDate;
        $this->billingPeriod = $billingPeriod;
        $this->paid = false;
        $this->paymentDate = null;
    }

    public function generatePaymentSlip(): void
    {
        // Lógica para geração do boleto
        echo "Boleto gerado para o aluno {$this->student->getName()} no valor de {$this->value}";
    }

    public function makePayment(): void
    {
        $this->paid = true;
        $this->paymentDate = new DateTime();
    }

    public function applyFine(float $percent): void
    {
        if (!$this->paid && new DateTime() > $this->dueDate) {
            $this->value += $this->value * ($percent / 100);
        }
    }

    public function applyDiscount(float $percent): void
    {
        if (!$this->paid) {
            $this->value -= $this->value * ($percent / 100);
        }
    }

    // Getters (opcional, mas recomendado)
    public function getValue(): float
    {
        return $this->value;
    }

    public function isPaid(): bool
    {
        return $this->paid;
    }
    public function setPaid(bool $value): void
    {
        $this->paid = $value;
    }

    public function getDueDate(): DateTime
    {
        return $this->dueDate;
    }

    public function getPaymentDate(): ?DateTime
    {
        return $this->paymentDate;
    }

    public function getBillingPeriod(): string
    {
        return $this->billingPeriod;
    }

    public function getStudent(): Student
    {
        return $this->student;
    }

    public function setStudent(Student $student): void
    {
        $this->student = $student;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }


}