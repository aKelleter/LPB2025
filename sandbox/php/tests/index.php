<?php

// Gestion des chemins
define('BASE_PATH', dirname(__DIR__));
define('BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/mon-projet/');

echo BASE_PATH . '<br>';
echo BASE_URL . '<br>';
