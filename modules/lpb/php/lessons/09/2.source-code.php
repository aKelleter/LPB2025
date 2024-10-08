<?php
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';

    // ---------------------------------------------------------------------------------
    echo '<h4>--- Ex 1 - La condition : if ---</h4>';
    $force_j1 = 4; // on affecte la valeur 4 à $force_j1
    $force_j2 = 2; // on affecte la valeur 2 à $force_j2
    
    // Un if simple : une seule instruction
    if($force_j1 > 1)
        echo 'Le joueur 1 ('.$force_j1.') à une force supérieure à 1<br>';
    
    if($force_j1 == $force_j2)
        echo 'Le joueur 1 et le joueur 2 sont de force égale.<br>';

    // ---------------------------------------------------------------------------------
    // Un bloc if : avec les accolades {} et exécuter plusieurs instructions
    echo '<h4>--- Ex 2 - Le bloc : if --- </h4>';
    if($force_j1 > $force_j2) {
        echo 'La force du joueur 1 ('.$force_j1.') est supérieure à la force du joueur 2 ('.$force_j2.')<br>';
        echo 'En résumé, le joueur 1 est plus balèse que le joueur 2 :)<br>';
    }

    // ---------------------------------------------------------------------------------
    // Imbriquer des if les uns dans les autres
    echo '<h4>--- Ex 3 - Imbrication de conditions : if ---</h4>';
    if($force_j1 > $force_j2) {
        echo 'La force du joueur 1 ('.$force_j1.') est supérieure à la force du joueur 2 ('.$force_j2.')<br>';
        if($force_j1 > 3) {
            echo 'Le joueur 1 est vraiment très fort !<br>';
        }
    }
            
    echo '<hr>';

    // ---------------------------------------------------------------------------------
    // If else
    echo '<h4>--- Ex 4 - La condition : if else ---</h4>';
    
    // Si la vie du joueur 1 est supérieure à 1 il est vivant sinon il est mort
    $vie_j1 = 0;

    if($vie_j1 > 1) {
        echo 'Le joueur 1 est vivant<br>';
    } else {
        echo 'Le joueur 1 est mort<br>';
    }

    echo '<hr>';

    // ---------------------------------------------------------------------------------
    // If elseif else
    echo '<h4>--- Ex 5 - La condition : if elseif else ---</h4>';
    
    // Applique un bonus à la force du joueur 1 en fonction de son level (1, 2 ou 3)
    $level_j1 = 2;
    $force_j1 = 3;
    $bonus_leger = 0;
    $bonus_moyen = 2;
    $bonus_fort = 4;

    echo 'Force du joueur 1 au départ : '.$force_j1.'<br>';

    if($level_j1 == 1) {
        $force_j1 += $bonus_leger;
    } elseif($level_j1 == 2) {
        $force_j1 += $bonus_moyen;
    } else {
        $force_j1 += $bonus_fort;
    }
    
    echo 'Force du joueur 1 après application du bonus : '.$force_j1.'<br>';

    echo '<hr>';
    // ---------------------------------------------------------------------------------
    // Comparaisons multiples
    echo '<h4>--- Ex 6 - La condition : les comparaisons multiples ---</h4>';
    // Amélioration de l'exemple précédent avec des comparaisons multiples
    $level_j1 = 15;
    $force_j1 = 5;
    $bonus_leger = 5;
    $bonus_moyen = 10;
    $bonus_fort = 18;

    echo 'Entre 1 et 10 le bonus est de : '.$bonus_leger.' | entre 11 et 20 le bonus est de : '.$bonus_moyen.
    ' | entre 21 et 30 le bonus est de : '.$bonus_fort.'<br>';

    echo 'Force du joueur 1 au départ : '.$force_j1.'<br>';
    echo 'Le niveau du joueur 1 au départ : '.$level_j1.'<br>';
    
    if($level_j1 >= 1 && $level_j1 <= 10) {
        $force_j1 += $bonus_leger;
    } elseif($level_j1 >= 11 && $level_j1 <= 20) {
        $force_j1 += $bonus_moyen;
    } elseif($level_j1 >= 21 && $level_j1 <= 30) {
        $force_j1 += $bonus_fort;
    } else {
        echo 'Le niveau du joueur 1 est inconnu<br>';
    }

    echo 'Force du joueur 1 après application du bonus : '.$force_j1.'<br>';

    echo '<hr>';

    // ---------------------------------------------------------------------------------
    // Inverser la valeur logique d’une variable, d’une condition ou d’un test
    echo '<h4>--- Ex 7 - La condition : Inverser la valeur logique d’une variable, d’une condition ou d’un test ---</h4>';

    $is_connected = false;

    if($is_connected) {
        echo '2. Bienvenu sur l\'interface d\'administration <br>';
    }else {
        echo '<a href="login.php">1. Connectez-vous</a><br>';
    }

    $is_connected = true;
    // Si l'on inverse la condition
    if(!$is_connected) {
        echo '<a href="login.php">2. Connectez-vous</a><br>';
    }else {
        echo '2. Vous êtes connecté<br>';
    }
?>
