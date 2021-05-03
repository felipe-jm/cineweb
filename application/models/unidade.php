<?php

require_once APP . 'core/model.php';
require_once APP . 'database/connection.php';

/**
 * - Unidade
 *
 * @property int id
 * @property string nome
 * @property string endereco
 */

class Unidade extends Model
{
  /**
   * Retorna todas as unidades
   */
  public static function all()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT id, nome, endereco FROM unidades";
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
  }

  /**
   * @param string $nome
   * @param int $cidade_id
   * @param string $endereco
   */
  public static function add($nome, $cidade_id, $endereco)
  {
    $connection = Connection::getConnection();
    $sql = "INSERT INTO unidades (nome, cidade_id, endereco) VALUES (:nome, :cidade_id, :endereco)";
    $query = $connection->prepare($sql);
    $parameters = array(':nome' => $nome, ':cidade_id' => $cidade_id, ':endereco' => $endereco);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  /**
   * @param int $unidade_id
   */
  public static function delete($unidade_id)
  {
    $connection = Connection::getConnection();
    $sql = "DELETE FROM unidades WHERE id = :unidade_id";
    $query = $connection->prepare($sql);
    $parameters = array(':unidade_id' => $unidade_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  public static function get($unidade_id)
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM unidades WHERE id = :unidade_id LIMIT 1";
    $query = $connection->prepare($sql);
    $parameters = array(':unidade_id' => $unidade_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);

    // fetch() is the PDO method that get exactly one result
    return $query->fetch();
  }

  /**
   * @param string $nome
   * @param int $cidade_id
   * @param int $unidade_id
   * @param string $endereco
   */
  public static function update($nome, $cidade_id, $unidade_id, $endereco)
  {
    $connection = Connection::getConnection();
    $sql = "UPDATE unidades SET nome = :nome, cidade_id = :cidade_id, endereco = :endereco WHERE id = :unidade_id";
    $query = $connection->prepare($sql);
    $parameters = array(':nome' => $nome, ':cidade_id' => $cidade_id, ':unidade_id' => $unidade_id, ':endereco' => $endereco);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }
}
