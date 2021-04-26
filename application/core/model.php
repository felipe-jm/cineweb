<?php

require_once APP . 'database/connection.php';

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function __set($atributo, $valor)
    {
        $this->atributos[$atributo] = $valor;
        return $this;
    }

    public function __get($atributo)
    {
        return $this->atributos[$atributo];
    }

    public function __isset($atributo)
    {
        return isset($this->atributos[$atributo]);
    }
}
