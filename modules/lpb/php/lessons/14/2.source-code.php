<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------
echol('Ex1 : Notre première boucle for');
for($c = 0; $c <= 5; $c++){    
    echo '$c contient la valeur ' .$c. '<br>';
}
hr();

echol('Ex2 : Une boucle for sans condition');
for ($i = 1 ; ; $i++) {
    if ($i > 5) {
        break;
    }
    echo '$i contient la valeur ' .$i. '<br>';
}
hr();

echol('Ex3 : Sans instruction dans la boucle');
for ($i = 1, $j = 0 ; $i <= 10 ; $j += $i, print $i, $i++);
hr();
   
?>
