<?php
require_once 'enums/StatusMatricula.php';

class Matricula {
    public string $identificador;
    public DateTime $data;
    public StatusMatricula $status;
    public float $valor;
}
