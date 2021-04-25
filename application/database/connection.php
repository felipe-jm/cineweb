<?php

class Connection
{
  protected static $db;

  private static function getDatabaseConnection()
  {
    $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

    self::$db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, $options);
  }

  /**
   * Função que retorna uma instância da Conexão
   * @return PDO|bool
   */
  public static function getConnection(): PDO
  {
    if (is_null(self::$db)) {
      self::getDatabaseConnection();
    }

    return self::$db;
  }
}
