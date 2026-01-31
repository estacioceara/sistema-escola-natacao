<?php
require_once 'Endereco.php';
require_once 'ResponsavelPeloAluno.php';
require_once 'Matricula.php';

class Aluno {
    public string $nome;
    public DateTime $data_nascimento;
    public ?string $cpf;
    public string $telefone;
    public string $obs;

    public Endereco $endereco;
    public ResponsavelPeloAluno $responsavel;
    public Matricula $matricula;

    public array $aulas = [];
    public array $mensalidades = [];

    public function matricular(): void {}
    public function editar(): void {}
    public function buscarInformacoes(): array {
        return get_object_vars($this);
    }
    public function darPresenca(): void {}
}
