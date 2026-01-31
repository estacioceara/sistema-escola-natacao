<?php

class MonthlyFee
{
    private float $value;
    private Aluno $student;
    private bool $paid;
    private DateTime $dueDate;
    private ?DateTime $paymentDate;
    private string $billingPeriod;

    public function __construct(
        float $value,
        Aluno $student,
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
}