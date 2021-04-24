<?php
class Assento {
    private $id;
    private $numero;
    private $unidade_id;
    private $cliente_id;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getUnidadeId() {
        return $this->unidade_id;
    }

    public function setUnidadeId($unidade_id) {
        $this->unidade_id = $unidade_id;
    }

    public function getClienteId() {
        return $this->cliente_id;
    }

    public function setClienteId($cliente_id) {
        $this->cliente_id = $cliente_id;
    }
}