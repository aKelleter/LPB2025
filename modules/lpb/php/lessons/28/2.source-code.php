<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------
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
 