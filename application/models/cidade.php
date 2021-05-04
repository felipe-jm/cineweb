<?php

require_once APP . 'core/model.php';
require_once APP . 'database/connection.php';

/**
 * - Cidade
 *
 * @property int id
 * @property string nome
 * @property string estado
 */

class Cidade extends Model
{
  /**
   * Retorna todas as cidades
   */
  public static function all()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT id, nome FROM cidades";
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
  }

  /**
   * @param string $nome
   * @param string estado
   */
  public static function add($nome, $estado)
  {
    $connection = Connection::getConnection();
    $sql = "INSERT INTO cidades (nome, estado) VALUES (:nome, :estado)";
    $query = $connection->prepare($sql);
    $parameters = array(':nome' => $nome, ':estado' => $estado);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  /**
   * @param int $cidade_id
   */
  public static function delete($cidade_id)
  {
    $connection = Connection::getConnection();
    $sql = "DELETE FROM cidades WHERE id = :cidade_id";
    $query = $connection->prepare($sql);
    $parameters = array(':cidade_id' => $cidade_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  public static function get($cidade_id)
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM cidades WHERE id = :cidade_id LIMIT 1";
    $query = $connection->prepare($sql);
    $parameters = array(':cidade_id' => $cidade_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);

    // fetch() is the PDO method that get exactly one result
    return $query->fetch();
  }

  /**
   * @param string $nome
   * @param string estado
   * @param int $cidade_id
   */
  public static function update($nome, $estado, $cidade_id)
  {
    $connection = Connection::getConnection();
    $sql = "UPDATE cidades SET nome = :nome, estado = :estado WHERE id = :cidade_id";
    $query = $connection->prepare($sql);
    $parameters = array(':nome' => $nome, ':estado' => $estado, ':cidade_id' => $cidade_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }
}
