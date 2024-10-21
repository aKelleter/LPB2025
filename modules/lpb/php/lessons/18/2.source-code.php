<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------
echol("Exo1: Deux fonctions d'addition add() et add2(). add() affiche le résultat et add2() retourne le résultat");
function add($a, $b){
    echo $a+$b.'<br>';
}
function add2($a, $b){
    return $a+$b;
}
add(2, 3);
$resultat = add2(2, 3).'<br>';
echo $resultat;
echo add2(10, 5);
hr();
//----------------------------------------------------------------------------------------------------
