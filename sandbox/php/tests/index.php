<?php

// Gestion des chemins
define('BASE_PATH', dirname(__DIR__));
define('BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/mon-projet/');

echo BASE_PATH . '<br>';
echo BASE_URL . '<br>';

// --------------------------------------------------------

// COOKIE

// Création d'un cookie
//setcookie('test', 'on', time() + 3600, '/', 'localhost', false, true);


// Lecture d'un cookie
if (isset($_COOKIE['test'])) {

    if ($_COOKIE['test'] === 'on') {
        echo 'Cookie test ACTIF : ' . $_COOKIE['test'] . '<br>';
        setcookie('test', 'off', time() + 3600, '/', 'localhost', false, true);
    }elseif($_COOKIE['test'] === 'off') {
        echo 'Cookie test INACTIF : ' . $_COOKIE['test'] . '<br>';
        setcookie('test', 'on', time() + 3600, '/', 'localhost', false, true);
    }else{
        echo 'Cookie test INCONNU : ' . $_COOKIE['test'] . '<br>';
    }

}else{
    echo 'Cookie test NON EXISTANT<br>';
}

