<?php
class Funcionario {
    private $id;
    private $nome;
    private $cpf;
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
    
    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    
    public function getUnidadeId() {
        return $this->unidade_id;
    }

    public function setUnidadeId($unidade_id) {
        $this->unidade_id = $unidade_id;
    }
}