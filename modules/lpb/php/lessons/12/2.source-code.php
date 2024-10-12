<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------

echol('Ex1 : Afficher les nombre de 1 à 10 avec une bloucle while');
$compteur = 1;
while ($compteur <= 10) {
    echo $compteur.'<br>';
    $compteur++;
}
hr();   

echol("Ex2 : Les opérateurs d'incrémentation et de décrémentation");
$x = 2; 
$y = 2; 
$a = 2; 
$b = 2;

echol('Valeur initiale de $x : '.$x);
echol('Valeur initiale de $y : '.$y);
echol('Valeur initiale de $a : '.$a);
echol('Valeur initiale de $b : '.$b);
            
echo 'Post incrémentation pour $x : ' .$x++. '<br>';
echo '$x contient maintenant : ' .$x. '<br>';

echo 'Pré incrémentation pour $y : ' .++$y. '<br>';
echo '$y contient maintenant : ' .$y. '<br>';

echo 'Post décrémentation pour $a : ' .$a--. '<br>';
echo '$a contient maintenant : ' .$a. '<br>';

echo 'Pré décrémentation pour $b : ' .--$b. '<br>';
echo '$b contient maintenant : ' .$b. '<br>';

hr();