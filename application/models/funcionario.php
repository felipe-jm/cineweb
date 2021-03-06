<?php

require_once APP . 'core/model.php';
require_once APP . 'database/connection.php';

/**
 * - Funcionario
 *
 * @property int id
 * @property string nome
 * @property string cpf
 * @property string telefone
 * @property int unidade_id
 */

class Funcionario extends Model
{
  /**
   * Retorna todos os funcionários
   */
  public static function all()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM funcionarios";
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
  }

  /**
   * @param string $nome
   * @param string $cpf
   * @property string telefone
   * @param int $unidade_id
   */
  public static function add($nome, $cpf, $telefone, $unidade_id)
  {
    $connection = Connection::getConnection();
    $sql = "INSERT INTO funcionarios (nome, cpf, telefone, unidade_id) VALUES (:nome, :cpf, :telefone, :unidade_id)";
    $query = $connection->prepare($sql);
    $parameters = array(':nome' => $nome, ':cpf' => $cpf, ':telefone' => $telefone, ':unidade_id' => $unidade_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  /**
   * @param int $funcionario_id
   */
  public static function delete($funcionario_id)
  {
    $connection = Connection::getConnection();
    $sql = "DELETE FROM funcionarios WHERE id = :funcionario_id";
    $query = $connection->prepare($sql);
    $parameters = array(':funcionario_id' => $funcionario_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  public static function get($funcionario_id)
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM funcionarios WHERE id = :funcionario_id LIMIT 1";
    $query = $connection->prepare($sql);
    $parameters = array(':funcionario_id' => $funcionario_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);

    // fetch() is the PDO method that get exactly one result
    return $query->fetch();
  }

  /**
   * @param string $nome
   * @param string $cpf
   * @param string $telefone
   * @param int $unidade_id
   * @param int $funcionario_id
   */
  public static function update($nome, $cpf, $telefone, $unidade_id, $funcionario_id)
  {
    $connection = Connection::getConnection();
    $sql = "UPDATE funcionarios SET nome = :nome, cpf = :cpf, telefone = :telefone, unidade_id = :unidade_id WHERE id = :funcionario_id";
    $query = $connection->prepare($sql);
    $parameters = array(':nome' => $nome, ':cpf' => $cpf, ':telefone' => $telefone, ':unidade_id' => $unidade_id, ':funcionario_id' => $funcionario_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }
}
