<?php
ini_set('display_errors', 1);

abstract class Pessoa {
  public string $nome;
  public string $cpf;
}

final class Professor extends Pessoa
{
  public string $categoria;
}

final class Aluno extends Pessoa
{
  public string $dataNascimento;
}

$a = new Aluno();
$a->nome = 'Jousy';
$a->cpf = '123.123.123-12';
$a->dataNascimento = '01/01/2001';

$p = new Professor();
$p->nome = 'Patrick';
$p->cpf = '333.344.123-12';
$p->categoria = 'HidroGinastica';

$x = new Pessoa();
$x->nome = 'Mauricio';

echo '<pre>';
print_r($p);
print_r($a);
print_r($x);
