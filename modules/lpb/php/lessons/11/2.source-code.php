<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------

echol("Ex1 : Exemple d'utilisation du switch case");
$var = 4;
echol('Valeur $var : '.$var, __LINE__);  
            
switch($var){
    case 0:
        echo '$var contient la valeur 0<br>';
        break;
    case 1:
        echo '$var contient la valeur 1<br>';
        break;
    case 2:
        echo '$var contient la valeur 2<br>';
        break;
    case 3:
        echo '$var contient la valeur 3<br>';
        break;
    case 4:
        echo '$var contient la valeur 4<br>';
        break;
    default:
        echo 'la valeur de $var n\'est pas comprise entre 0 et 4<br>';
}

// Équivaut à:
if ($var == 0) {
    echo '$var contient la valeur 0<br>';
} elseif ($var == 1) {
    echo '$var contient la valeur 1<br>';
} elseif ($var == 2) {
    echo '$var contient la valeur 2<br>';
} elseif ($var == 3) {
    echo '$var contient la valeur 3<br>';
} elseif ($var == 4) {
    echo '$var contient la valeur 4<br>';
} else {
    echo '$var n\'est pas compris entre 0 et 4<br>';
}
hr();

echol("Ex2 : Switch case avec omission volontaire de l'instruction break");
$var = 1;
echol('Valeur $var : '.$var, __LINE__);

switch($var){
    case 0:        
    case 1:        
    case 2:
        echo 'la valeur de $var est comprise entre 0 et 2<br>';
        break;
    case 3:
        echo '$var contient la valeur 3<br>';
        break;
    case 4:
        echo '$var contient la valeur 4<br>';
        break;
    default:
        echo 'la valeur de $var n\'est pas comprise entre 0 et 4<br>';
}
hr();

echol("Ex3 : Switch case avec omission involontaire de l'instruction break :)");
$var = 1;
echol('Valeur $var : '.$var, __LINE__);

switch($var){
    case 0:
        echo '$var contient la valeur 0<br>';
    case 1:
        echo '$var contient la valeur 1<br>';
    case 2:
        echo '$var contient la valeur 2<br>';
    case 3:
        echo '$var contient la valeur 3<br>';
    case 4:
        echo '$var contient la valeur 4<br>';
    default:
        echo 'la valeur de $var n\'est pas comprise entre 0 et 4<br>';
}
   
?>
