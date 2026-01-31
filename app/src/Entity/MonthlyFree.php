<?php

class Mensalidade
{
    private float $valor;
    private Aluno $aluno;
    private bool $pago;
    private DateTime $dataVencimento;
    private ?DateTime $dataPagamento;
    private string $competencia;

    public function __construct(
        float $valor,
        Aluno $aluno,
        DateTime $dataVencimento,
        string $competencia
    ) {
        $this->valor = $valor;
        $this->aluno = $aluno;
        $this->dataVencimento = $dataVencimento;
        $this->competencia = $competencia;
        $this->pago = false;
        $this->dataPagamento = null;
    }

    public function gerarBoleto(): void
    {
        // Lógica para geração do boleto
        echo "Boleto gerado para o aluno {$this->aluno->getNome()} no valor de {$this->valor}";
    }

    public function efetuarPagamento(): void
    {
        $this->pago = true;
        $this->dataPagamento = new DateTime();
    }

    public function multar(float $percentual): void
    {
        if (!$this->pago && new DateTime() > $this->dataVencimento) {
            $this->valor += $this->valor * ($percentual / 100);
        }
    }

    public function aplicarDesconto(float $percentual): void
    {
        if (!$this->pago) {
            $this->valor -= $this->valor * ($percentual / 100);
        }
    }

    // Getters (opcional, mas recomendado)
    public function getValor(): float
    {
        return $this->valor;
    }

    public function isPago(): bool
    {
        return $this->pago;
    }

    public function getDataVencimento(): DateTime
    {
        return $this->dataVencimento;
    }

    public function getDataPagamento(): ?DateTime
    {
        return $this->dataPagamento;
    }

    public function getCompetencia(): string
    {
        return $this->competencia;
    }
}