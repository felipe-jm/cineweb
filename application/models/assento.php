<?php

require_once APP . 'core/model.php';
require_once APP . 'database/connection.php';

/**
 * - Assento
 *
 * @property int id
 * @property int unidade_id
 * @property int cliente_id
 * @property int sessao_id
 * @property int numero
 * @property boolean disponivel
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
   * @property int cliente_id
   * @property int sessao_id
   * @property boolean disponivel
   */
  public static function add($numero, $unidade_id, $cliente_id, $sessao_id, $disponivel)
  {
    $connection = Connection::getConnection();
    $sql = "INSERT INTO assentos (numero, unidade_id, cliente_id, sessao_id, disponivel) VALUES (:numero, :unidade_id, :cliente_id, :sessao_id, :disponivel)";
    $query = $connection->prepare($sql);
    $parameters = array(':numero' => $numero, ':unidade_id' => $unidade_id, ':cliente_id' => $cliente_id, ':sessao_id' => $sessao_id, ':disponivel' => $disponivel);

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
   * @property int numero
   * @property int unidade_id
   * @property int cliente_id
   * @property int sessao_id
   * @property boolean disponivel
   */
  public static function update($numero, $cliente_id, $sessao_id, $assento_id, $disponivel)
  {
    $connection = Connection::getConnection();
    $sql = "UPDATE assentos SET numero = :numero, cliente_id = :cliente_id, sessao_id = :sessao_id, disponivel = :disponivel WHERE id = :assento_id";
    $query = $connection->prepare($sql);
    $parameters = array(':numero' => $numero, ':cliente_id' => $cliente_id, ':sessao_id' => $sessao_id, ':assento_id' => $assento_id, ':disponivel' => $disponivel);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }
}
