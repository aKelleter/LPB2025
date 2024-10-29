<?php

echo"<p>Exo2 : Gestion des erreurs personnalisée v2 avec une fonction customError <br>qui affiche des messages différents selon les cas.</p>";

// Gestion des erreurs personnalisée
function customError($errno, $errstr) {
    switch ($errno) {
        case E_USER_ERROR:
            echo "<b>Erreur fatale :</b> [$errno] $errstr<br>";
            echo "Arrêt du script";
            die();
            break;
        case E_USER_WARNING:
            echo "<b>Attention :</b> [$errno] $errstr<br>";
            break;
        case E_USER_NOTICE:
            echo "<b>Information :</b> [$errno] $errstr<br>";
            break;
        default:
            echo "<b>Erreur inconnue :</b> [$errno] $errstr<br>";
            break;
    }
}

// Configuration de l'erreur
set_error_handler("customError");

// Test de l'erreur
$test = 2;
if ($test > 1) {
    trigger_error("La valeur doit être inférieure ou égale à 1", E_USER_WARNING);
}