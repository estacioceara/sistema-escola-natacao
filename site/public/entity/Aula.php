<?php
require_once 'Professor.php';
require_once 'enums/NivelAula.php';
require_once 'enums/ModalidadeAula.php';

class Aula {
    public Professor $professor;
    public NivelAula $nivel;
    public DateTime $horario;
    public DateTime $data;
    public ModalidadeAula $modalidade;
    public float $valor;
    public string $local;
    public array $alunos = [];

    public function agendar(): void {}
    public function editar(): void {}
    public function cancelar(): void {}
    public function buscarInformacoes(): array {
        return get_object_vars($this);
    }
}
