<?php

require_once APP . 'core/model.php';
require_once APP . 'database/connection.php';

/**
 * - Filme
 *
 * @property int id
 * @property string nome
 * @property int duracao
 * @property int unidade_id
 * @property int sessao_id
 */

class Filme extends Model
{
  /**
   * Retorna todos os filmes
   */
  public static function all()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM filmes";
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
  }

  /**
   * @property string nome
   * @property int duracao
   * @property int unidade_id
   * @property int sessao_id
   */
  public static function add($nome, $duracao, $unidade_id, $sessao_id)
  {
    $connection = Connection::getConnection();
    $sql = "INSERT INTO filmes (nome, duracao, unidade_id, sessao_id) VALUES (:nome, :duracao, :unidade_id, :sessao_id)";
    $query = $connection->prepare($sql);
    $parameters = array(':nome' => $nome, ':duracao' => $duracao, ':unidade_id' => $unidade_id, ':sessao_id' => $sessao_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  /**
   * @param int $filme_id
   */
  public static function delete($filme_id)
  {
    $connection = Connection::getConnection();
    $sql = "DELETE FROM filmes WHERE id = :filme_id";
    $query = $connection->prepare($sql);
    $parameters = array(':filme_id' => $filme_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  public static function get($filme_id)
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM filmes WHERE id = :filme_id LIMIT 1";
    $query = $connection->prepare($sql);
    $parameters = array(':filme_id' => $filme_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);

    // fetch() is the PDO method that get exactly one result
    return $query->fetch();
  }

  /**
   * @property string nome
   * @property int duracao
   * @property int unidade_id
   * @property int sessao_id
   */
  public static function update($nome, $duracao, $unidade_id, $sessao_id, $filme_id)
  {
    $connection = Connection::getConnection();
    $sql = "UPDATE filmes SET nome = :nome, duracao = :duracao, unidade_id = :unidade_id, sessao_id = :sessao_id WHERE id = :filme_id";
    $query = $connection->prepare($sql);
    $parameters = array(':nome' => $nome, ':duracao' => $duracao, ':unidade_id' => $unidade_id, ':sessao_id' => $sessao_id, ':filme_id' => $filme_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }
}
