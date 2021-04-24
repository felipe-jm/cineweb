<?php
class Filme {
    private $id;
    private $nome;
    private $duracao;
    private $unidade_id;
    private $sessao_id;

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
    
    public function getDuracao() {
        return $this->duracao;
    }

    public function setDuracao($duracao) {
        $this->duracao = $duracao;
    }
    
    public function getUnidadeId() {
        return $this->unidade_id;
    }

    public function setUnidadeId($unidade_id) {
        $this->unidade_id = $unidade_id;
    }

    public function getSessaoId() {
        return $this->sessao_id;
    }

    public function setSessaoId($sessao_id) {
        $this->sessao_id = $sessao_id;
    }
}