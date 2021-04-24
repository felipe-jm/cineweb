<?php
class Unidade {
    private $nome;
    private $cidade_id;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCidadeId() {
        return $this->cidade_id;
    }

    public function setCidadeId($cidade_id) {
        $this->cidade_id = $cidade_id;
    }
}