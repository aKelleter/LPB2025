<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------
echol("Exo1 : Déclaration de 2 tableau indexés");
$chars = array('a', 'b', 'c', 'd', 'e');
$ascii = ['97', '98', '99', '100', '101'];

echol("Affichage des tableaux");
DBGPrint($chars, "PR", "\$chars : ");
DBGPrint($ascii, "PR", "\$ascii : ");

hr();
//----------------------------------------------------------------------------------------------------
echol("Exo2 : Accéder aux éléments d'un tableau indexé");
echol("Affichage des éléments des tableaux");
echo("Le 3ème élément de \$chars est : ".$chars[2].'<br>');
echo("Le 3ème élément de \$ascii est : ".$ascii[2].'<br>');
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo 3 : Afficher un tableau indexé avec la boucle for");
$tableau = [5, 10, 15];
for ($i = 0; $i < count($tableau); $i++) {
    echo $tableau[$i].'<br>';
}
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo4 : Des tableaux avec des indices qui ne se suivent pas");
$tableau2 = [];
$tableau2[5] = 25;
$tableau2[10] = 50;
$tableau2[15] = 75;
$tableau2[3] = 100;    
for ($i = 0; $i < count($tableau2); $i++) {
    echo $tableau2[$i].'<br>';
}
// On est têtu, on va essayer de les afficher avec une boucle for :)
echol("Version 2 : Version tête de mule");
for ($i = 5, $j = 0; $j < count($tableau2); $i+=5, $j++) {
    echo $tableau2[$i].'<br>';
}
DBGPrint($tableau2, "PR", "\$tableau2 : ");
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo5 : Parcourir un tableau indexé avec la boucle foreach");
foreach ($tableau2 as $valeur) {
    echo $valeur.'<br>';
}
foreach ($tableau2 as $cle => $valeur) {
    echo "La clé $cle contient la valeur $valeur<br>";
}
hr();
//----------------------------------------------------------------------------------------------------
echol("Just For Fun : la puissance de la fonction array_combine()");
echo"Associer deux tableaux indexés pour en créer un seul.<br>";
$charsascii = array_combine($ascii, $chars);
DBGPrint($charsascii, "PR", "\$charsascii : ");
hr();
//----------------------------------------------------------------------------------------------------