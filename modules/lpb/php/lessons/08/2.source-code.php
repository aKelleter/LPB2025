<?php
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
   // Exemple d'associativité des opérateurs
    echo '<h3>Exemples : d\'associativité des opérateurs</h3>';
    $a = 3;
    $b = 4;
    $c = 5;
    echo '$a = ' . $a . ', $b = ' . $b . ', $c = ' . $c.'<br>';
    
    $result = $a + $b * $c;
    echo '$a + $b * $c = ' . $result; // 23
    echo '<br>';

    $result = ($a + $b) * $c;
    echo '($a + $b) * $c = ' . $result; // 35
    echo '<br>';

    $result = $a + ($b * $c);
    echo '$a + ($b * $c) = ' . $result; // 23
    echo '<br>';
    echo '<hr>';    


    echo '<h3>Exemple : ordre d\'évaluation</h3>';
    /*
    PHP ne spécifie pas (de manière générale) l'ordre dans lequel 
    une expression est évaluée</strong> et le code qui suppose un ordre spécifique d'évaluation ne devrait pas exister, 
    car le comportement peut changer entre les différentes versions de PHP ou suivant le code environnant.
    */
    
    $a = 1;
    echo '$a = ' . $a . '<br>';
    echo '$a + $a++ : '. $a + $a++ . '<br>'; 
    echo 'Peut afficher 2 ou 3 ...<br>';
    echo '<hr>';

    echo '<h3>Exemple : Priorité identique : + et -</h3>';
    $z = 3 - 6 + 7 - 4; // 0
    echo '$z = 3 - 6 + 7 - 4 => ' . $z . '<br>';

    $z = 3 - (6 + 7) - 4; // 0
    echo '$z = 3 - (6 + 7) - 4 => ' . $z . '<br>';
    echo '<hr>';

?>
