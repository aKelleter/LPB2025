<h1>Récapitulatif</h1>
<p>
    Depuis le début du cours nous avons vu :
</p>
<?php

/**
 * Cours du 09-12-2024
 * 
 */

 // Récapitulatif minute des leçons précédentes
    // 1. Ecrire du code PHP
    // 2. Les structures echo et print
    // 3. Les variables
    // 4. Les opérateurs
    // 5. Les structures de contrôle (if, else, elseif, switch)
    // 6. Les boucles (for, while, do while)


/**
 *  1. Écrire du code PHP
 *  Le code PHP est intégré dans des fichiers ayant l'extension .php.
 *  Les balises PHP permettent d'écrire du code dans une page :
 *  PHP peut être mélangé avec du HTML pour générer du contenu dynamique.
 */
?>

<?php
    // Les balises PHP 
    echo '1. Ouverture et fermeture des balises PHP'; br();
    hr();
?>  

<?php
/**
 *  2. Les structures echo et print
 *  Utilisées pour afficher des données ou du texte.
 *  echo : Plus rapide et peut afficher plusieurs chaînes en une seule instruction.
 *  print : Plus lent, mais retourne toujours une valeur (1).
 */
?>
<?php
    echo '2. Les structures echo et print'; br();
    echo 'Hello World'; br();// Affiche Hello World
    echo 'Hello', 'World'; br();// Affiche HelloWorld   
    echo 'Hello' . 'World'; br();// Affiche HelloWorld

    print 'Hello World'; br();// Affiche Hello World   
    print 'Hello' . 'World'; br();// Affiche HelloWorld

    echo print ''; br();// Affiche 1

    // Version courte d'echo
?>
<p><?= 'Version courte de la structure "echo"' ?></p>

<?php
    hr();
?>

<?php

/**
 * 3. Les variables
 * Une variable est un espace mémoire nommé qui permet de stocker des données.
 * Une variable commence par le signe $ suivi du nom de la variable.
 * Le nom doit commencer par une lettre ou un underscore (_).
 * Une variable peut contenir des lettres, des chiffres et des underscores.
 * Une variable ne peut pas contenir d’espaces ou de caractères spéciaux.  
 * Une variable ne peut pas commencer par un chiffre.
 * Une variable est sensible à la casse.
 * Une variable peut être réaffectée.
 * Une variable peut être de type numérique, chaîne de caractères, booléen, tableau, objet, ressource, NULL.
 * ...
 */
?>
<?php
    eecho('3. Les variables');
    $name = 'John Doe'; // Chaîne de caractères
    $age = 25; // Numérique
    $isStudent = true; // Booléen
    $var = null; // NULL

    $names = ['John', 'Jane', 'Jack']; // Tableau
    $user = new stdClass(); // Objet
    $user->name = 'John Doe'; // Propriété
    

    // Sensible à la casse
    $ville = 'Paris'; // Chaîne de caractères
    $Ville = 'Bruxelles'; // Chaîne de caractères

    eecho($ville);
    eecho($Ville);

    br();
    eecho('Les constantes');
    // Les constantes
    define('PI', 3.14);
    define('APP_NAME', 'Mon application');
    const APP_VERSION = 'v1.0.0';
    eecho(PI);
    eecho(APP_NAME);
    eecho(APP_VERSION);
    
    hr();
?>

<?php
eecho('4. Les opérateurs');
/**
 *  4. Les opérateurs
 *  PHP offre divers opérateurs pour manipuler des données.
 */
$a = 5;
$b = 5;
$x = 10;
?>

<?php
eecho('Les opérateurs arithmétiques');
// Opérateurs arithmétiques : +, -, *, /, %
$somme = 5 + 3; // Résultat : 8 
?>

<?php
eecho('Les opérateurs de comparaison');
// Les Opérateurs de comparaison : ==, !=, ===, !==, >, <, <=, >=

if ($a == $b) { echo "Égal"; }
br();
?>

<?php
eecho('Les opérateurs logiques');

// Opérateurs logiques : &&, ||, !
if ($a > 0 && $b > 0) { echo "Positif"; }
br();
?>

<?php
eecho("Les opérateurs d'affectation");
// Opérateurs d'affectation : =, +=, -=, *=, /=
$x += 5; // Ajoute 5 à $x
echo $x; // Résultat : 15
br();

/**
 * Petit rappel sur la priorité des opérateurs :
 * 
 * Voir tableau sur la priorité des opérateurs dans le cours ou sur php.net
 * Utilisez les parenthèses pour clarifier et forcer l'ordre d'évaluation
 */



hr();
?>

<?php
/**
 * 5. Les structures de contrôle
 * Elles permettent de prendre des décisions conditionnelles.
 */
eecho("5. Les structures de contrôle");
?>

<?php
eecho('if else elseif');
$age = 18;
if ($age >= 18) {
    echo "Majeur";
} elseif ($age == 17) {
    echo "Presque majeur";
} else {
    echo "Mineur";
}
br();

?>

<?php
eecho('switch');
$jour = "Lundi";
switch ($jour) {
    case "Lundi":
        echo "Début de semaine";
        break;
    case "Vendredi":
        echo "Fin de semaine";
        break;
    default:
        echo "Jour ordinaire";
}
br();
hr();
?>

<?php
/**
 * Les boucles
 * Utilisées pour exécuter du code plusieurs fois.
 */
 eecho('6. Les boucles');
 eecho('La boucle for');
 // For : pour un nombre défini d’itérations.
 for ($i = 0; $i < 5; $i++) {
    echo "Compteur : $i <br>";
 }
 br();

 eecho('La boucle while');
 // La boucle while : tant qu'une condition est vraie
 $i = 0;
 while ($i < 5) {
     echo "Compteur : $i <br>";
     $i++;
 }
 br();

 eecho('La boucle do while');
 // La boucle do while : exécute le bloc de code auy moins une fois, puis répète tant qu'une condition est vraie
 $i = 5;
 do {
     echo "Compteur : $i <br>";
     $i++;
 } while ($i < 5);
 br();

?>

<?php
/*
    Résumé
    Ces concepts sont les bases fondamentales pour débuter avec PHP. Ils permettent de manipuler des données, d’écrire des scripts dynamiques 
    et de contrôler le flux d’exécution des programmes.
*/
?>


<?php
    // Fonctions
    function eecho($str) {
        echo "<em>$str</em>";
        br();
    }

    function br() {
        echo '<br>';
    }   

    function hr() {
        echo '<hr>';
    }
?>