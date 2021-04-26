<?php

require_once APP . 'core/model.php';
require_once APP . 'database/connection.php';

/**
 * - Sessao
 *
 * @property int id
 * @property int numero
 * @property int unidade_id
 */

class Sessao extends Model
{
  /**
   * Retorna todos as sessões
   */
  public static function all()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM sessoes";
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
  }

  /**
   * @property int $numero
   * @param int $unidade_id
   */
  public static function add($numero, $unidade_id)
  {
    $connection = Connection::getConnection();
    $sql = "INSERT INTO sessoes (numero, unidade_id) VALUES (:numero, :unidade_id)";
    $query = $connection->prepare($sql);
    $parameters = array(':numero' => $numero, ':unidade_id' => $unidade_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  /**
   * @param int $sessao_id
   */
  public static function delete($sessao_id)
  {
    $connection = Connection::getConnection();
    $sql = "DELETE FROM sessoes WHERE id = :sessao_id";
    $query = $connection->prepare($sql);
    $parameters = array(':sessao_id' => $sessao_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  public static function get($sessao_id)
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM sessoes WHERE id = :sessao_id LIMIT 1";
    $query = $connection->prepare($sql);
    $parameters = array(':sessao_id' => $sessao_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);

    // fetch() is the PDO method that get exactly one result
    return $query->fetch();
  }

  /**
   * @param int $numero
   * @param int $unidade_id
   * @param int $sessao_id
   */
  public static function update($numero, $unidade_id, $sessao_id)
  {
    $connection = Connection::getConnection();
    $sql = "UPDATE sessoes SET numero = :numero, unidade_id = :unidade_id WHERE id = :sessao_id";
    $query = $connection->prepare($sql);
    $parameters = array(':numero' => $numero, ':unidade_id' => $unidade_id, ':sessao_id' => $sessao_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }
}
