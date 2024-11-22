<?php
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>'; 
    // Les types de variables

    // Déclaration et initialisation de variables de différents types
    $entier = 10; // entier
    echo 'Value : '.$entier.' -> '; echo gettype($entier).'<br><hr>'; // Affiche : integer
    
    $decimal = 10.5; // nombre à virgule flottante
    echo 'Value : '.$decimal.' -> '; echo gettype($decimal).'<br><hr>'; // Affiche : integer

    $chaine = "Hello, World!"; // chaîne de caractères
    echo 'Value : '.$chaine.' -> '; echo gettype($chaine).'<br><hr>'; // Affiche : string
    
    $booleen = true; // booléen (true ou false)
    echo 'Value : '.var_dump($booleen).' -> '; echo gettype($booleen).'<br><hr>'; // Affiche : boolean

    $tableau = array(1, 2, 3, 4, 5); // tableau
    echo 'Value : '.var_dump($tableau).' -> '; echo gettype($tableau).'<br><hr>'; // Affiche : array

    $objet = new stdClass(); // objet
    echo 'Value : '.var_dump($objet).' -> '; echo gettype($objet).'<br><hr>'; // Affiche : object

    $nulle = null; // la valeur nulle
    echo 'Value : '.var_dump($nulle).' -> '; echo gettype($nulle).'<br><hr>'; // Affiche : NULL

    $ressource = fopen('fichier.txt', 'r'); // ressource
    echo 'Value : '.var_dump($ressource).' -> '; echo gettype($ressource).'<br>'; // Affiche : resource
    //Afficher le contenu de fichier.txt
    echo fread($ressource, filesize('fichier.txt'));
    echo '<br><hr>';

    $fonction = function() { return "Hello, World!"; }; // fonction anonyme / closure
    echo 'Value : '.var_dump($fonction).' -> '; echo gettype($fonction).'<br><hr>'; // Affiche : callable

    $iterable = [1, 2, 3, 4, 5]; // itérable / tableau
    echo 'Value : '.var_dump($iterable).' -> '; echo gettype($iterable).'<br><hr>'; // Affiche : array

    // Le type casting
    $age = 10;   // $age est un entier
    echo var_dump($age) . ' -> Value $age : '.$age.' -> '; echo gettype($age).'<br>';
    $age = (bool) $age;   // $flag est un booléen
    echo var_dump($age) . ' -> Value $age : '.$age.' -> '; echo gettype($age).'<br><hr>';  

    // autre méthode
    $a = "10";  // $a est une chaîne de caractères
    echo var_dump($a) . ' -> Value $a : '.$a.' -> '; echo gettype($a).'<br>';
    settype($a,"integer"); // $a est maintenant un entier
    echo var_dump($a) . ' -> Value $a : '.$a.' -> '; echo gettype($a).'<br>';

?>
