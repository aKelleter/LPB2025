<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------
//La variable $x n'a pas été définie
echo $x;
    
//Le fichier fichierfantome.php n'existe pas
include 'fichierfantome.php';
 
echol("Ce message s'affiche car un simple 'Warning' est renvoyé");
 
//Le fichier fichierfantome.php n'existe pas
require 'fichierfantome.php';
 
echol("Ce message ne s'affichera pas car une 'Erreur fatale' est renvoyée");
hr();
//----------------------------------------------------------------------------------------------------
