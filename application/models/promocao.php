<?php

require_once APP . 'core/model.php';
require_once APP . 'database/connection.php';

/**
 * - Promocao
 *
 * @property int id
 * @property string nome
 * @property string data_inicio
 * @property string data_fim
 * @property int unidade_id
 * @property double preco
 */

class Promocao extends Model
{
  /**
   * Retorna todos as promocoes
   */
  public static function all()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM promocoes";
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
  }

  /**
   * @param string $nome
   * @property double $preco
   * @property string $data_fim
   * @property string $data_inicio
   * @param int $unidade_id
   */
  public static function add($nome, $preco, $data_fim, $data_inicio, $unidade_id)
  {
    $connection = Connection::getConnection();
    $sql = "INSERT INTO promocoes (nome, preco, data_fim, data_inicio, unidade_id) VALUES (:nome, :preco, :data_fim, :data_inicio,:unidade_id)";
    $query = $connection->prepare($sql);
    $parameters = array(':nome' => $nome, ':preco' => $preco,':data_fim' => $data_fim, ':data_inicio' => $data_inicio, ':unidade_id' => $unidade_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  /**
   * @param int $promocao_id
   */
  public static function delete($promocao_id)
  {
    $connection = Connection::getConnection();
    $sql = "DELETE FROM promocoes WHERE id = :promocao_id";
    $query = $connection->prepare($sql);
    $parameters = array(':promocao_id' => $promocao_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  public static function get($promocao_id)
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM promocoes WHERE id = :promocao_id LIMIT 1";
    $query = $connection->prepare($sql);
    $parameters = array(':promocao_id' => $promocao_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);

    // fetch() is the PDO method that get exactly one result
    return $query->fetch();
  }

  /**
   * @param string $nome
   * @property string $data_fim
   * @property string $data_inicio
   * @param int $unidade_id
   * @param int $promocao_id
   */
  public static function update($nome, $data_fim, $data_inicio, $unidade_id, $promocao_id)
  {
    $connection = Connection::getConnection();
    $sql = "UPDATE promocoes SET nome = :nome, data_fim = :data_fim, data_inicio = :data_inicio, unidade_id = :unidade_id WHERE id = :promocao_id";
    $query = $connection->prepare($sql);
    $parameters = array(':nome' => $nome, ':data_fim' => $data_fim, ':data_inicio' => $data_inicio, ':unidade_id' => $unidade_id, ':promocao_id' => $promocao_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }
}
