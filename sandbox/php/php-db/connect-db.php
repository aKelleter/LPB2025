<?php
require_once 'conf.php';

try {

    // INSTANCIATION DE LA CONNEXION
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASSWORD);
    
    // CONFIGURATION DE LA GESTION DES ERREURS
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    die(); 
}