<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------
echol("Exo1 : Exemples de portées de variables");

// Déclaration et initialisation de la variable globale $var
$var = 100;

// Définitions des fonctions
function fnport1(){
    echol('La valeur de $var globale est : ' .$var. '<br>', __LINE__);
}
function fnport2(){
    $var = 5;
    echol('La valeur de $var locale est : ' .$var. '<br>', __LINE__);
}
function fnport3(){
    $compteur = 0;
    $compteur++;
    echol('$compteur contient la valeur : ' .$compteur. '<br>',__LINE__);
}
function fnport4(){
    $nb = 1;
}

// Appels des fonctions
fnport1();
fnport2();
fnport3();
fnport3();
fnport4();

// Tentative d'affichage de la variable locale $nb
echol('La variable locale $nb contient : ' .$nb, __LINE__);    

hr();
//----------------------------------------------------------------------------------------------------   
echol("Exo2 : Exemple de déclaration avec le mot clé global");

// Déclaration et initialisation de la variable globale $varx
$varx = 10;
    
// Définition de la fonction fnport5()
function fnport5() {
    global $varx;  
    echo ' >> Dans la fonction la valeur de $varx globale est : ' .$varx. '<br>';
    $varx = $varx + 5; // On ajoute 5 à la valeur de $varx
}

// Appel de la fonction fnport5()
echo 'Apple de la fonction fnport5() <br>';
fnport5();

echo 'Après l\'exécution de la fonction, $varx contient maintenant : ' .$varx;

hr();
//----------------------------------------------------------------------------------------------------
echol("Exo3 : Exemple de variable retournée avec return");

// Définition de la fonction fnport6()  
function fnport6() {
    $var = 10;
    return $var;
}
echol('La valeur de retour de la fonction fnport6() est : ' .fnport6(), __LINE__);
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo4 : Variable déclarée avec le mot clé static");

// Définition de la fonction fnport7()
function fnport7() {
    static $var = 0;
    $var++;
    return $var;
}

// Appels de la fonction fnport7()
echol('La valeur de retour de la fonction fnport7() est : ' .fnport7(), __LINE__);
echol('La valeur de retour de la fonction fnport7() est : ' .fnport7(), __LINE__);
echol('La valeur de retour de la fonction fnport7() est : ' .fnport7(), __LINE__);
hr();
//----------------------------------------------------------------------------------------------------

