<?php

require_once APP . 'core/model.php';
require_once APP . 'database/connection.php';

/**
 * - Combo
 *
 * @property int id
 * @property string nome
 * @property int unidade_id
 * @property int tipo
 * @property int preco
 */

class Combo extends Model
{
  /**
   * Retorna todos as comidas
   */
  public static function all()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM comidas";
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
  }

  /**
   * @property int id
   * @property string nome
   * @property int unidade_id
   * @property int tipo
   * @property int preco
   */
  public static function add($nome, $unidade_id, $tipo, $preco)
  {
    $connection = Connection::getConnection();
    $sql = "INSERT INTO comidas (nome, unidade_id, tipo, preco) VALUES (:nome, :unidade_id, :tipo, :preco)";
    $query = $connection->prepare($sql);
    $parameters = array(':nome' => $nome, ':unidade_id' => $unidade_id, ':tipo' => $tipo, ':preco' => $preco);

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
    $sql = "DELETE FROM comidas WHERE id = :comida_id";
    $query = $connection->prepare($sql);
    $parameters = array(':comida_id' => $comida_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  public static function get($comida_id)
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM comidas WHERE id = :comida_id LIMIT 1";
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
   * @property int tipo
   * @property int preco
   */
  public static function update($nome, $unidade_id, $comida_id, $tipo, $preco)
  {
    $connection = Connection::getConnection();
    $sql = "UPDATE comidas SET nome = :nome,unidade_id = :unidade_id, tipo = :tipo, preco = :preco WHERE id = :comida_id";
    $query = $connection->prepare($sql);
    $parameters = array(':nome' => $nome, ':unidade_id' => $unidade_id, ':comida_id' => $comida_id, ':tipo' => $tipo, ':preco' => $preco);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }
}
