<?php

class Aluno
{
    public function __construct(
        public string $nome,
        public DateTime $data_nascimento,
        public ?string $cpf,
        public string $telefone,
        public string $obs,
        public Endereco $endereco,
        public ResponsavelPeloAluno $responsavel,
        public Matricula $matricula
    ) {}

    public function matricular(): void
    {
        // lógica de matrícula
    }

    public function editar(): void
    {
        // lógica de edição
    }

    public function buscarInformacoes(): array
    {
        return get_object_vars($this);
    }

    public function darPresenca(Aula $aula): void
    {
        // registrar presença
    }

    public static function all(): array
    {
      $query = 'SELECT * FROM'
      return
    }









}
