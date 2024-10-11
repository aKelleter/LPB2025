<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------

// Définition des variables
$a = 0;
$b = 0;
$c = 0;



echol('Ex1 : La condition classique');
    // La condition classique
    if ($a) {
        $b = $a;
    } else {
        $b = 1;
    }
    echol('b = '.$b, __LINE__);  // Amélioration de la structure echo (voir fct.php)

// La condition avec l'opérateur ternaire
echol('Ex2 : La condition avec l\'opérateur ternaire');
    $b = $a ? $a : 1;
    echol('b = '.$b, __LINE__);
    hr();

// Une autre condition avec l'opérateur ternaire raccourci
echol('Ex3 : La condition avec l\'opérateur ternaire raccourci');
    $var = 5;
                
    // Version condition classique
    if($var >= 0){
        echol($var >= 0, __LINE__).'<br>';
    }else{
        echo '$var contient un nombre négatif<br>';
    }
    // Equivalent avec l'opérateur ternaire
    // echo $var >=0 ?: '$var contient un nombre négatif';
    echol($var >= 0, __LINE__) ?: '$var contient un nombre négatif'; 
    hr();

// La condition avec l'opérateur null coalescing ou fusion null
echol('Ex4 : L\'opérateur de coalescence null ou fusion null');
    // Premier exemple
    $c = $a ?? 1;
    echol('c = '.$c, __LINE__);

    // Second exemple
    $x = 5; 
    $y = NULL;
    $z;
    
    $resultx = $x ?? 'NULL';
    $resulty = $y ?? 'NULL';
    $resultz = $z ?? 'NULL';
    
    echol('$x contient ' .$resultx, __LINE__);
    echol('$y contient ' .$resulty,__LINE__);
    echol('$z contient ' .$resultz, __LINE__ );
    hr();




?>
