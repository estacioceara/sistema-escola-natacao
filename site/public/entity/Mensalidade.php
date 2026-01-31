<?php
require_once 'Aluno.php';
require_once 'Desconto.php';

class Mensalidade {
    public float $valor;
    public Aluno $aluno;
    public bool $pago = false;
    public DateTime $data_vencimento;
    public ?DateTime $data_pagamento = null;
    public string $competencia;
    public array $descontos = [];

    public function gerarBoleto(): void {}
    public function efetuarPagamento(): void {
        $this->pago = true;
        $this->data_pagamento = new DateTime();
    }
    public function multar(float $valor): void {
        $this->valor += $valor;
    }
    public function aplicarDesconto(Desconto $desconto): void {
        $this->valor -= $desconto->valor;
        $this->descontos[] = $desconto;
    }
}
