<?php
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
    // Les opérateurs de concaténation :  .  et  .=    

    // L'opérateur de concaténation :  .
    echo "L'opérateur de concaténation .<br>";
    $my_chain = 'Hello';
    $my_chain = $my_chain . ' everybody';
    echo $my_chain;
    echo '<br>';
    echo '<hr>';

    // L'opérateur de concaténation/affectation :  .=
    echo "L'opérateur de concaténation/affectation .=<br>";
    $ma_chaine = 'Bonjour';
    $ma_chaine .= ' tout le monde';
    echo $ma_chaine;
    echo '<br>';
    echo '<hr>';

    // L'opérateur d'affectation :  =
    echo "L'opérateur d'affectation =<br>";
    $ma_variable = 4;
    $autre_variable = $ma_variable;
    echo 'Ma variable : ' . $ma_variable . '<br>';
    echo '<hr>';

    // L'opérateur d'affection :  +=
    echo "L'opérateur d'affection combiné +=<br>";
    $a = 3;
    $a += 5; // affecte la valeur 8 à la variable $a correspond à l'instruction '$a = $a + 5';  
    echo 'a = ' . $a . '<br>';
    echo '<hr>';

    // L'affectation par référence :  =&
    echo "L'affectation par référence =&<br>";
    $a = 3;
    $b = &$a; // $b est une référence à $a
    echo 'a = ' . $a . '<br>';
    echo '<hr>';

    // Les opérateurs arithmétiques :  +  -  *  /  %  **
    echo "Les opérateurs arithmétiques :  +  -  *  /  %  **<br>";    
    $addition = 2 + 4;
    $soustraction = 6 - 2;
    $multiplication = 5 * 3;
    $division = 15 / 3;
    $modulo = 5 % 2;
    $exposant = 2 ** 3;
    echo "Addition: 2 + 4 = $addition <br>";
    echo "Soustraction: 6 - 2 = $soustraction <br>";
    echo "Multiplication:  5 * 3 = $multiplication <br>";
    echo "Division: 15 / 3 = $division <br>";
    echo "Modulo (reste de la division): 5 % 2 = $modulo <br>"; 
    echo "Exposant: 2 ** 3 = $exposant <br>";
    echo '<hr>';

    // Les opérateurs de comparaison :  ==  ===  !=  !==  <  >  <=  >=
    echo "Les opérateurs de comparaison :  ==  ===  !=  !==  <  >  <=  >=<br>";
    $c = 5;
    $d = 3;
    echo '$c = 5; $d = 3;<br>';
    var_dump($c == $d); echo '$c == $d<br>'; // false 
    var_dump($c === $b); echo '$c === $b<br>'; // false
    var_dump($c != $d); echo '$c != $d<br>'; // true
    var_dump($c !== $d); echo '$c !== $d<br>'; // true
    var_dump($c < $d); echo '$c < $d<br>'; // false
    var_dump($c > $d); echo '$c > $d<br>'; // true
    var_dump($c <= $d); echo '$c <= $d<br>'; // false
    var_dump($c >= $d); echo '$c >= $d<br>'; // true
    echo '<hr>';

    // Les opérateur combinés arithmétiques et d'affectation :  +=  -=  *=  /=  %=  **=
    echo "Les opérateur combinés arithmétiques et d'affectation :  +=  -=  *=  /=  %=  **=<br>";
    $e = 5; 
    echo "Valeur de \$e au départ = $e <br>"; 

    $e += 3; // $e = $e + 3;
    echo '$e += 3; // $e = $e + 3;  $e = ' . $e . '<br>';

    $e -= 2; // $e = $e - 2;
    echo '$e -= 2; // $e = $e - 2;  $e = ' . $e . '<br>';

    $e *= 4; // $e = $e * 4;
    echo '$e *= 4; // $e = $e * 4;  $e = ' . $e . '<br>';

    $e /= 2; // $e = $e / 2;
    echo '$e /= 2; // $e = $e / 2;  $e = ' . $e . '<br>';

    $e %= 3; // $e = $e % 3;
    echo '$e %= 3; // $e = $e % 3;  $e = ' . $e . '<br>';

    $e **= 2; // $e = $e ** 2;
    echo '$e **= 2; // $e = $e ** 2;  $e = ' . $e . '<br>';

    echo '<hr>';

    // Les opérateurs de pré/post incrémentation et de pré/post décrémentation :  ++  --
    echo "Les opérateurs de pré/post incrémentation et de pré/post décrémentation :  ++  --<br>";
    $f = 5;
    echo "Valeur de \$f au départ = $f <br>";
    echo 'Pré-incrémentation: ++$f = ' . ++$f . '<br>'; // incrémente $f de 1 puis retourne la valeur de $f
    echo 'Valeur de $f après pré-incrémentation = ' . $f . '<br>';
    echo 'Post-incrémentation: $f++ = ' . $f++ . '<br>'; // retourne la valeur de $f puis incrémente $f de 1
    echo 'Valeur de $f après post-incrémentation = ' . $f . '<br>';
    echo 'Pré-décrémentation: --$f = ' . --$f . '<br>'; // décrémente $f de 1 puis retourne la valeur de $f
    echo 'Valeur de $f après pré-décrémentation = ' . $f . '<br>';
    echo 'Post-décrémentation: $f-- = ' . $f-- . '<br>'; // retourne la valeur de $f puis décrémente $f de 1
    echo 'Valeur de $f après post-décrémentation = ' . $f . '<br>';
    echo '<hr>';


    // Les opérateur logiques :  and  or  xor  &&  ||  !
    echo "Les opérateur logiques :  and  or  xor  &&  ||  !<br>";
    $g = 5;
    $h = 3;
    echo '$g = 5; $h = 3;<br>';
    var_dump($g == 5 and $h == 3); echo '$g == 5 and $h == 3<br>'; // true
    var_dump($g == 5 or $h == 2); echo '$g == 5 or $h == 2<br>'; // true
    var_dump($g == 5 xor $h == 2); echo '$g == 5 xor $h == 2<br>'; // true
    var_dump($g == 5 && $h == 3); echo '$g == 5 && $h == 3<br>'; // true
    var_dump($g == 5 || $h == 2); echo '$g == 5 || $h == 2<br>'; // true
    var_dump(!($g == 5)); echo '!($g == 5)<br>'; // false
    echo '<hr>';
?>
