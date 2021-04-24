<?php
class Combo {
    private $id;
    private $nome;
    private $unidade_id;

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

    public function getUnidadeId() {
        return $this->unidade_id;
    }

    public function setUnidadeId($unidade_id) {
        $this->unidade_id = $unidade_id;
    }
}