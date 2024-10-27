<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------
echol("La superglobale \$GLOBALS");  
echo '<a href="2.source-code.php?nom=link&age=17">Avec une query string</a><br>';

$nom = 'Link';
$job = "Epéiste";
$age = 17;

function zelda() {
    $nom = 'Zelda';
    $job = "Mage";
    $age = 17;
    echo 'Je suis '.$nom.', '.$job.' et j\'ai '.$age.' ans.<br>';
}
function presentation() {
    echo 'Je suis '.$GLOBALS['nom'].', '.$GLOBALS['job'].' et j\'ai '.$GLOBALS['age'].' ans.<br>';
}

echol("Appel de la fonction presentation() : ");
presentation();

echol("Appel de la fonction zelda() : ");
zelda();

echol("Appel de la fonction DBGPrint() : ");
DBGPrint($GLOBALS);

hr();
//----------------------------------------------------------------------------------------------------

echol("La superglobale \$_SERVER");
DBGPrint($_SERVER);
hr();
//----------------------------------------------------------------------------------------------------

echol("La superglobale \$_REQUEST");
DBGPrint($_REQUEST);
hr();
//----------------------------------------------------------------------------------------------------

echol("La superglobale \$_ENV");
DBGPrint($_ENV);
hr();
//----------------------------------------------------------------------------------------------------

echol("La superglobale \$_GET et \$_POST");
DBGPrint($_GET, 'PR', 'GET');
DBGPrint($_POST, 'PR', 'POST');
hr();
//----------------------------------------------------------------------------------------------------


