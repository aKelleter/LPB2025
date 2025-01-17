<?php
    /*
    //La variable $x n'a pas été définie
    echo $x;
        
    //Le fichier fichierfantome.php n'existe pas
    include 'fichierfantome.php';
    
    echo"Ce message s'affiche car un simple 'Warning' est renvoyé";
    
    //Le fichier fichierfantome.php n'existe pas
    require 'fichierfantome.php';
    
    echo"Ce message ne s'affichera pas car une 'Erreur fatale' est renvoyée";
    */

    echo '<hr>';

    /*
    // Gestion des erreurs personnalisée
    function customError($errno, $errstr) {
        echo "Erreur: [$errno] $errstr<br>";
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
    */

    echo '<hr>';

    /*
    // Gestion des erreurs personnalisée
    function customError($errno, $errstr) {
        switch ($errno) {
            case E_USER_ERROR:
                // Dépréccié depuis PHP 8.4
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
        //trigger_error("La valeur doit être inférieure ou égale à 1", E_USER_NOTICE);
        //trigger_error("La valeur doit être inférieure ou égale à 1", E_USER_ERROR);
    }
    */

    echo '<hr>';
    
    /*
    try {
        // Code susceptible de générer une exception
        $result = 1 / 1;
        if ($result == 1) {
            throw new Exception('Diviser par 1 ne change rien !');
        }
        echo "Résultat : $result";
    } catch (Exception $e) {
        // Gestion de l'exception
        echo "<br>Exception capturée : " . $e->getMessage();
    } finally {
        // Code exécuté après le bloc try/catch
        echo "<br>Fin de l'exécution";
    }   
        
    */
     






