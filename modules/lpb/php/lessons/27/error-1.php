<?php

echo"Exo1 : Gestion des erreurs personnalisée <br>";

// Gestion des erreurs personnalisée
function customError($errno, $errstr) {
    echo "<b>Erreur:</b> [$errno] $errstr<br>";
    echo "Fin du script";
    die();
}

// Configuration de l'erreur
set_error_handler("customError");

// Test de l'erreur
$test = 2;
if ($test > 1) {
    trigger_error("La valeur doit être égale ou inférieure à 1", E_USER_WARNING);
}