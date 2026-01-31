<?php
require_once 'Endereco.php';
require_once 'enums/CategoriaProfessor.php';

class Professor {
    public string $nome;
    public string $cpf;
    public CategoriaProfessor $categoria;
    public Endereco $endereco;
    public array $turnos = [];
    public array $aulas = [];
}
