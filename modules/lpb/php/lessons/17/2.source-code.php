<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------
echol("Exo1 : Ajoute un 1 à un argument avec passage par valeur");
function add1($a) {
    $a++;
    echo 'Valeur de $a : '.$a.'<br>';
}
$x = 5;
add1($x);
echo 'Valeur de $x : '.$x.'<br>';
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo2 : Ajoute un 1 à un argument avec passage par référence");
function add1_ref(&$a) {
    $a++;
    echo 'Valeur de $a : '.$a.'<br>';
}
$x = 5;
add1_ref($x);
echo 'Valeur de $x : '.$x.'<br>';
hr();
//----------------------------------------------------------------------------------------------------   
echol("Exo3 : Fonction avec un paramètre par défaut");
function vehicule($type = 'voiture') {
    echo 'Type de véhicule : '.$type.'<br>';
}
vehicule();
vehicule('moto');
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo4 : Fonction avec plusieurs paramètres dont un par défaut");
function vehicule2($marque, $type = 'voiture') {
    echo 'Type de véhicule : '.$type.'<br>';
    echo 'Marque : '.$marque.'<br>';
}
vehicule2('Honda');
vehicule2('Kawasaki', 'moto');
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo5 : Fonction avec un nombre variable de paramètres");
function personnage($nom, ...$caracteristiques) {
    echo 'Nom : '.$nom.'<br>';
    echo 'Caratéristiques : ';
    foreach($caracteristiques as $item) {
        echo $item.' ';
    }
    echo '<br>';
}
personnage('Link', 'Epéiste', 'Muet', 'Héro');
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo6 : Fonction sans typage et avec typage");
function add($a, $b) {
    echo $a. ' + ' .$b. ' = ' .($a + $b). '<br>';
}
function addplus(float $a, float $b) {
    echo $a. ' + ' .$b. ' = ' .($a + $b). '<br>';
}

add(5, 8);
add(10, '2zelda');  //'2zelda' est converti en 2 par PHP mais génère un warining
//add(10, 'zelda'); // Erreur fatale

addplus(5, 8);
addplus(5, 5.5);
addplus(54.5, 6.2);
//addplus(5, '2zelda'); // Erreur fatale
//addplus(5, 'zelda');  // Erreur fatale

hr();
//----------------------------------------------------------------------------------------------------
