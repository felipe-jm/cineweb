<?php

require_once APP . 'core/model.php';
require_once APP . 'database/connection.php';

/**
 * - Comida
 *
 * @property int id
 * @property string nome
 * @property int unidade_id
 * @property int peso
 * @property int preco 
 */

class Comida extends Model
{
  /**
   * Retorna todos as combos
   */
  public static function all()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM combos";
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
  }

  /**
   * @property int id
   * @property string nome
   * @property int unidade_id
   * @property int peso
   * @property int preco 
   */
  public static function add($nome, $unidade_id, $peso, $preco)
  {
    $connection = Connection::getConnection();
    $sql = "INSERT INTO combos (nome, unidade_id, peso, preco) VALUES (:nome, :unidade_id, :peso, :preco)";
    $query = $connection->prepare($sql);
    $parameters = array(':nome' => $nome, ':unidade_id' => $unidade_id, ':peso' => $peso, ':preco' => $preco);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  /**
   * @param int $comida_id
   */
  public static function delete($comida_id)
  {
    $connection = Connection::getConnection();
    $sql = "DELETE FROM combos WHERE id = :comida_id";
    $query = $connection->prepare($sql);
    $parameters = array(':comida_id' => $comida_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  public static function get($comida_id)
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM combos WHERE id = :comida_id LIMIT 1";
    $query = $connection->prepare($sql);
    $parameters = array(':comida_id' => $comida_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);

    // fetch() is the PDO method that get exactly one result
    return $query->fetch();
  }

  /**
   * @property int id
   * @property string nome
   * @property int unidade_id
   * @param int $comida_id
   * @property int peso
   * @property int preco 
   */
  public static function update($nome, $unidade_id, $comida_id, $peso, $preco)
  {
    $connection = Connection::getConnection();
    $sql = "UPDATE combos SET nome = :nome,unidade_id = :unidade_id, peso = :peso, preco = :preco WHERE id = :comida_id";
    $query = $connection->prepare($sql);
    $parameters = array(':nome' => $nome, ':unidade_id' => $unidade_id, ':comida_id' => $comida_id, ':peso' => $peso, ':preco' => $preco);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }
}
