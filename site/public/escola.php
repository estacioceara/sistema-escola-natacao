<?php 

class Aluno{
    public string $nome;
    public string $cpf;   
    public DateTime $dataNascimento;
}

class Professor{
    public string $nome;
    public string $cpf;   
    public string $categoria;
}

$a = new Aluno();
$a->nome = "Maria Silva";
$a->cpf = "123.456.789-00";
$a->dataNascimento = new DateTime('2005-08-15');

$p = new Professor();
$p->nome = "João Pereira";
$p->cpf = "987.654.321-00";
$p->categoria = "Matemática";

echo'<pre>';
print_r($a);

print_r($p);