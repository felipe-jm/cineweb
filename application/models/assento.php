<?php

require_once APP . 'core/model.php';
require_once APP . 'database/connection.php';

/**
 * - Assento
 *
 * @property int id
 * @property int numero
 * @property int unidade_id
 * @property int client_id
 */

class Assento extends Model
{
  /**
   * Retorna todos os assentos
   */
  public static function all()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM assentos";
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
  }

  /**
   * @property int numero
   * @property int unidade_id
   * @property int client_id
   */
  public static function add($numero, $unidade_id, $client_id)
  {
    $connection = Connection::getConnection();
    $sql = "INSERT INTO assentos (numero, unidade_id, client_id) VALUES (:numero, :unidade_id, :client_id)";
    $query = $connection->prepare($sql);
    $parameters = array(':numero' => $numero, ':unidade_id' => $unidade_id, ':client_id' => $client_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  /**
   * @param int $assento_id
   */
  public static function delete($assento_id)
  {
    $connection = Connection::getConnection();
    $sql = "DELETE FROM assentos WHERE id = :assento_id";
    $query = $connection->prepare($sql);
    $parameters = array(':assento_id' => $assento_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  public static function get($assento_id)
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM assentos WHERE id = :assento_id LIMIT 1";
    $query = $connection->prepare($sql);
    $parameters = array(':assento_id' => $assento_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);

    // fetch() is the PDO method that get exactly one result
    return $query->fetch();
  }

  /**
   * @property string nome
   * @property int numero
   * @property int cliente_id
   * @property int sessao_id
   */
  public static function update($numero, $cliente_id, $sessao_id, $assento_id)
  {
    $connection = Connection::getConnection();
    $sql = "UPDATE assentos SET numero = :numero, cliente_id = :cliente_id, sessao_id = :sessao_id WHERE id = :assento_id";
    $query = $connection->prepare($sql);
    $parameters = array(':numero' => $numero, ':cliente_id' => $cliente_id, ':sessao_id' => $sessao_id, ':assento_id' => $assento_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }
}
