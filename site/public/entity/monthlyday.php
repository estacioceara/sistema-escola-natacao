class Mensalidade
{
    private float $valor;

    private Aluno $aluno;

    private bool $pago = false;

    private DateTime $dataVencimento;

    private DateTime $dataPagamento;

    private string $competencia;

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    public function getAluno(): Aluno
    {
        return $this->aluno;
    }

    public function setAluno(Aluno $aluno): void
    {
        $this->aluno = $aluno;
    }

    public function isPago(): bool
    {
        return $this->pago;
    }

    public function setPago(bool $pago): void
    {
        $this->pago = $pago;
    }

    public function getDataVencimento(): DateTime
    {
        return $this->dataVencimento;
    }

    public function setDataVencimento(DateTime $dataVencimento): void
    {
        $this->dataVencimento = $dataVencimento;
    }

    public function getDataPagamento(): DateTime
    {
        return $this->dataPagamento;
    }

    public function setDataPagamento(DateTime $dataPagamento): void
    {
        $this->dataPagamento = $dataPagamento;
    }

    public function getCompetencia(): string
    {
        return $this->competencia;
    }

    public function setCompetencia(string $competencia): void
    {
        $this->competencia = $competencia;
    }

    // Métodos de domínio (sem implementação de infra)

    public function efetuarPagamento(DateTime $dataPagamento): void
    {
        $this->pago = true;
        $this->dataPagamento = $dataPagamento;
    }

}

        <!-- public function multar(float $percentual): void
    {
        // Regra de multa pode ser aplicada via Service
    }

        public function aplicarDesconto(float $percentual): void
    {
        // Regra de desconto pode ser aplicada via Service
    }

        public function gerarBoleto(): void
    {
        // Implementação ficará em Service / UseCase
    } -->