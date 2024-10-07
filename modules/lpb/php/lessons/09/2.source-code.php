<?php
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';

    echo 'La condition : if<br>';
    $x = 4; // on affecte la valeur 4 à $x
    $y = 2; // on affecte la valeur 2 à $y

    if($x > 1) {
        echo '$x ('.$x.') contient une valeur supérieure à 1';
    }

    if($x == $y) {
        echo '$x et $y contiennent la même valeur';
    }
   
?>
