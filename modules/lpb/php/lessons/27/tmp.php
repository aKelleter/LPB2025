<?php

/*
Exemple de gestion des erreurs en PHP :
*/  
// Gestion des erreurs
function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Ending Script";
    die();
}

// Configuration de l'erreur
set_error_handler("customError");

// Test de l'erreur
$test = 2;
if ($test > 1) {
    trigger_error("Value must be 1 or below", E_USER_WARNING);
}

//----------------------------------------------------------------------------------------------------
/* 
    Ce code permet de gérer les erreurs en PHP. La fonction customError() est définie pour afficher un message d'erreur 
    personnalisé lorsqu'une erreur est déclenchée. La fonction set_error_handler() est utilisée pour définir la fonction customError() 
    comme gestionnaire d'erreurs par défaut. Ensuite, un test est effectué pour déclencher une erreur si la valeur de la variable $test 
    est supérieure à 1. Si l'erreur est déclenchée, un message d'erreur personnalisé est affiché.
*/ 
//----------------------------------------------------------------------------------------------------

// Personnaliser le message d'erreur en fonction des paramètres passés à la fonction customError().
//----------------------------------------------------------------------------------------------------

// Gestion des erreurs personnalisée
function customErrors($errno, $errstr) {
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
set_error_handler("customErrors");

// Test de l'erreur
$test = 2;
if ($test > 1) {
    trigger_error("La valeur doit être inférieure ou égale à 1", E_USER_WARNING);
}
//----------------------------------------------------------------------------------------------------
/*
    Ce code permet de personnaliser le message d'erreur en fonction du type d'erreur rencontré. La fonction customErrors() est définie 
    pour afficher un message d'erreur personnalisé en fonction du type d'erreur (erreur fatale, avertissement, information, etc.). 
    Ensuite, la fonction set_error_handler() est utilisée pour définir la fonction customErrors() comme gestionnaire d'erreurs par défaut. 
    Un test est effectué pour déclencher une erreur de type E_USER_WARNING si la valeur de la variable $test est supérieure à 1. 
    En fonction du type d'erreur rencontré, un message d'erreur personnalisé est affiché.
*/
//----------------------------------------------------------------------------------------------------
/*
    Voici un exemple d'erreur fatale qui arrêtera l'exécution du script :
*/
// Gestion des erreurs personnalisée
function customFatalError($errno, $errstr) {
    echo "<b>Erreur fatale :</b> [$errno] $errstr<br>";
    echo "Arrêt du script";
    die();
}

// Configuration de l'erreur
set_error_handler("customFatalError");

// Test de l'erreur fatale
trigger_error("Ceci est une erreur fatale", E_USER_ERROR);
//----------------------------------------------------------------------------------------------------
/*
    Ce code permet de déclencher une erreur fatale en utilisant la fonction trigger_error() avec le type d'erreur E_USER_ERROR. 
    L'erreur fatale est gérée par la fonction customFatalError() qui affiche un message d'erreur personnalisé et arrête l'exécution du script.
*/
//----------------------------------------------------------------------------------------------------

/*
    Voici un exemple d'utilisation de try, catch et finally pour gérer les exceptions en PHP :
*/
try {
    // Code susceptible de générer une exception
    $result = 1 / 0;
    if ($result == INF) {
        throw new Exception('Division par zéro impossible !');
    }
    echo "Résultat : $result";
} catch (Exception $e) {
    // Gestion de l'exception
    echo "Exception capturée : " . $e->getMessage();
} finally {
    // Code exécuté après le bloc try/catch
    echo "Fin de l'exécution";
}
//----------------------------------------------------------------------------------------------------
/*
    Ce code tente de diviser le nombre 1 par 0, ce qui génère une exception de division par zéro. 
    L'exception est capturée dans le bloc catch et un message d'erreur est affiché. 
    Enfin, le bloc finally est exécuté après le bloc try/catch, affichant un message de fin d'exécution.
*/
//----------------------------------------------------------------------------------------------------