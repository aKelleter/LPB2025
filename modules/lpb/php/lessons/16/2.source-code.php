<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------
echol("Ex1 : Déclaration d'une fonction simple");   
function hello() {
    echo 'Hello World !<br>';    
}
hr();
//----------------------------------------------------------------------------------------------------
echol("Ex2 : Appels de la fonction hello()");
hello();
hello();
hello();   
hr();
//----------------------------------------------------------------------------------------------------
echol("Ex3 : Déclaration d'une fonction avec paramètre");
function bonjour($nom) {
    echo 'Bonjour '.$nom.' !<br>';    
}
bonjour('John');
hr();
//----------------------------------------------------------------------------------------------------
echol("Ex4 : Déclaration de la fonction addition(\$a, \$b)");
function addition($a, $b) {
    echo $a. ' + ' .$b. ' = ' .($a + $b). '<br>';
}
addition(5, 3);
hr();
//----------------------------------------------------------------------------------------------------

