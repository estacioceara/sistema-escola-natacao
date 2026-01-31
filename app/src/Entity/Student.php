<?php

class Student
{
    private string $nome;
    private DateTime $dataNascimento;
    private ?string $cpf;
    private string $telefone;
    private string $obs;

    private Endereco $endereco;
    private Responsavel $responsavel;
    private Matricula $matricula;

    public function __construct(
        string $nome,
        DateTime $dataNascimento,
        ?string $cpf,
        string $telefone,
        string $obs,
        Endereco $endereco,
        Responsavel $responsavel,
        Matricula $matricula
    ) {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->obs = $obs;
        $this->endereco = $endereco;
        $this->responsavel = $responsavel;
        $this->matricula = $matricula;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getDataNascimento(): DateTime
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento(DateTime $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(?string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

    public function getObs(): string
    {
        return $this->obs;
    }

    public function setObs(string $obs): void
    {
        $this->obs = $obs;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function setEndereco(Endereco $endereco): void
    {
        $this->endereco = $endereco;
    }

    public function getResponsavel(): Responsavel
    {
        return $this->responsavel;
    }

    public function setResponsavel(Responsavel $responsavel): void
    {
        $this->responsavel = $responsavel;
    }

    public function getMatricula(): Matricula
    {
        return $this->matricula;
    }

    public function setMatricula(Matricula $matricula): void
    {
        $this->matricula = $matricula;
    }

    public function matricular(): void
    {
        // 
    }

    public function editar(array $dados): void
    {
        // 
    }

    public function buscarInformacoes(): array
    {
        // 
        return [];
    }

    public function darPresenca(): void
    {
        //
    }
}
