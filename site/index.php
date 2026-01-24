<?php

ini_set('display_errors', 1);


class Aluno
{
  public string $nome;
  public string $email;
  public int $idade;
}

$chiquim = new Aluno();
$chiquim->nome = 'Zezim';

echo "O nome do aluno é <strong>{$chiquim->nome}</strong>";

class ContaBancaria
{
  public string $agencia;
  private string $conta;
  private float $saldo;

  public function __construct()
  {
     $this->conta = rand(90000, 99999);
  }

  public function getConta(): string
  {
    return $this->conta;
  }

  public function getSaldo(): float
  {
    return $this->saldo;
  }

  public function deposito(float $novoSaldo): void
  {
    $this->saldo += $novoSaldo;
  }

  public function saque(float $valor): void
  {
    if ($valor > $this->saldo) {
      throw new Exception('Saldo insuficiente');
    }

    $this->saldo -= $valor;
  }
}

$c1 = new ContaBancaria();
$c1->agencia = '0001';
$c1->setSaldo(1900);
$c1->setSaldo(2001);
$c1->setSaldo(10002);

echo "<br>";
echo "Conta {$c1->getConta()} <br>";
echo "Saldo R$ {$c1->getSaldo()} <br>";
