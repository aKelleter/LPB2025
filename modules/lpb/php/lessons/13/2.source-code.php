<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------
echol('Ex1 : La boucle do...while');
$varx = 0;
$vary = 20;

do{
    echo '$varx contient la valeur ' .$varx. '<br>';
    $varx++;
}while($varx <= 5);
hr();

do{
    echo '$vary contient la valeur ' .$vary. '<br>';
    $vary++;
}while($vary <= 5);    

