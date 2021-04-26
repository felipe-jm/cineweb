<?php

define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);

if (file_exists(ROOT . 'vendor/autoload.php')) {
    require ROOT . 'vendor/autoload.php';
}

require APP . '/config/config.php';
require APP . '/libs/pdo-debug.php';
require APP . '/core/application.php';

$app = new Application();
