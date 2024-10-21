<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------
echol("Exo1 : exemples de portées de variables");

$var = 100;
            
function fnport1(){
    echo 'La valeur de $var globale est : ' .$var. '<br>';
}
function fnport2(){
    $var = 5;
    echo 'La valeur de $var locale est : ' .$var. '<br>';
}
function fnport3(){
    $compteur = 0;
    $compteur++;
    echo '$compteur contient la valeur : ' .$compteur. '<br>';
}
function fnport4(){
    $nb = 1;
}
fnport1();
fnport2();
fnport3();
fnport3();
fnport4();
echo 'La variable locale $nb contient : ' .$nb;    

hr();
//----------------------------------------------------------------------------------------------------   