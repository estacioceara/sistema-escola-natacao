<?php

class Aluno
{
    public string $nome;
    public string $email;   
    public int $idade;
}

$chiquim = new Aluno();
$chiquim->nome = "Zezim";

echo "O nome do aluno é <strong>{$chiquim->nome}</strong>";


class ContaBancaria{
    public string $conta;
    public string $agencia;
    private float $saldo;

    public function __construct()
    {
        $this->conta = rand(9000,9999);
        $this->agencia = "0001";
        $this->saldo = 0.0;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function depositar(float $valor): void
    {
        $this->saldo += $valor;
    }

    public function sacar(float $valor): bool
    {
        if ($valor > $this->saldo) {
            return false;
        }
        $this->saldo -= $valor;
        return true;
    }
}

$c1 =  new ContaBancaria();

echo "O saldo atual do <strong>{$chiquim->nome}</strong> é de <strong> R$ {$c1->getSaldo()}</strong>";

$c1->depositar(100.0);

echo "Após o depósito, o novo saldo da conta do <strong>{$chiquim->nome}</strong> é de <strong> R$ {$c1->getSaldo()}</strong>";