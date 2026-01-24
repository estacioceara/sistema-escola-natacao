<?php

class Mensalidade
{
    public function __construct(
        public float $valor,
        public Aluno $aluno,
        public bool $pago,
        public DateTime $data_vencimento,
        public ?DateTime $data_pagamento,
        public string $competencia
    ) {}

    public function gerarBoleto(): void
    {
        // gerar boleto
    }

    public function efetuarPagamento(): void
    {
        $this->pago = true;
        $this->data_pagamento = new DateTime();
    }

    public function multar(float $valorMulta): void
    {
        $this->valor += $valorMulta;
    }

    public function aplicarDesconto(Desconto $desconto): void
    {
        $this->valor -= $desconto->valor;
    }
}
