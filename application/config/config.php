<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', 'cineweb');
define('URL_INDEX_FILE', 'index.php' . '/');

if (defined('URL_SUB_FOLDER')) {
    define('URL', URL_PROTOCOL . URL_DOMAIN . '/' . URL_SUB_FOLDER . '/');
    define('URL_WITH_INDEX_FILE', URL_PROTOCOL . URL_DOMAIN . '/' . URL_SUB_FOLDER . '/' . URL_INDEX_FILE);
} else {
    define('URL', URL_PROTOCOL . URL_DOMAIN . '/');
    define('URL_WITH_INDEX_FILE', URL_PROTOCOL . URL_DOMAIN . '/' . URL_INDEX_FILE);
}

/**
 * Configuração do Banco de dados
 * Aqui são definidas as credenciais para o banco, se estiver utilizando o XAMPP,
 * essas configurações padrão irão funcionar
 */
define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'cineweb');
define('DB_USER', 'root');
define('DB_PASS', 'ratocozinheiro');
