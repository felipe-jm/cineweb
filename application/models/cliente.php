<?php

require_once APP . 'core/model.php';
require_once APP . 'database/connection.php';

/**
 * - Cliente
 *
 * @property int id
 * @property string nome
 * @property int unidade_id
 * @property string cpf
 * @property string telefone
 */

class Cliente extends Model
{
  /**
   * Retorna todos as clientes
   */
  public static function all()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM clientes";
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
  }

  /**
 * @property string nome
 * @property int unidade_id
 * @property string cpf
 * @property string telefone
 */
  public static function add($nome, $unidade_id, $cpf, $telefone)
  {
    $connection = Connection::getConnection();
    $sql = "INSERT INTO clientes (nome, unidade_id, cpf, telefone) VALUES (:nome, :unidade_id, cpf, telefone)";
    $query = $connection->prepare($sql);
    $parameters = array(':nome' => $nome, ':unidade_id' => $unidade_id, ':cpf' => $cpf, ':telefone' => $telefone);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  /**
   * @param int $cliente_id
   */
  public static function delete($cliente_id)
  {
    $connection = Connection::getConnection();
    $sql = "DELETE FROM clientes WHERE id = :cliente_id";
    $query = $connection->prepare($sql);
    $parameters = array(':cliente_id' => $cliente_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  public static function get($cliente_id)
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM clientes WHERE id = :cliente_id LIMIT 1";
    $query = $connection->prepare($sql);
    $parameters = array(':cliente_id' => $cliente_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);

    // fetch() is the PDO method that get exactly one result
    return $query->fetch();
  }

  /**
   * @param string nome
   * @param int unidade_id
   * @param int $cliente_id
   * @param string cpf
   * @param string telefone
   * 
   */
  public static function update($nome, $unidade_id, $cliente_id, $cpf, $telefone)
  {
    $connection = Connection::getConnection();
    $sql = "UPDATE clientes SET nome = :nome,unidade_id = :unidade_id, cpf = :cpf, telefone = :telefone WHERE id = :cliente_id";
    $query = $connection->prepare($sql);
    $parameters = array(':nome' => $nome, ':unidade_id' => $unidade_id, ':cliente_id' => $cliente_id, ':cpf' => $cpf, ':telefone' => $telefone,);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }
}
