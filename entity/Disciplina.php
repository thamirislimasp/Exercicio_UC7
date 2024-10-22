<?php

class Disciplina {
    private $id;
    private $nome;
    private $cargaHoraria;
    // Implemente o array de alunos que será utilizado pela entidade Disciplina

    private $disciplinaAlunos = [];

    public function __construct($id, $nome, $cargaHoraria) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cargaHoraria = $cargaHoraria;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCargaHoraria() {
        return $this->cargaHoraria;
    }

    public function setCargaHoraria($cargaHoraria) {
        $this->cargaHoraria = $cargaHoraria;
    }

    // Implemente os getters e setters para as ler e inserir um array de alunos no objeto discplina

    public function getDisciplinas() {
        return $this->disciplinaAlunos;
    }

    public function setDisciplinas($disciplinaAlunos) {
        $this->disciplinaAlunos = $disciplinaAlunos;
    }
}
?>
