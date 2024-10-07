<?php
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
    // Exemples de constantes
    // Déclaration et initialisation
    const NOM_JEU = "Super Mario Odyssey";
    define("PI", 3.14159);

    // Utilisation (affichage)
    echo "Le jeu s'appelle ".NOM_JEU."<br>";
    echo "La valeur de PI est ".PI."<br><hr>";

    // Quelques constantes magiques
    echo 'Chemin du fichier : ' . __FILE__.'<br>'; // Affiche le chemin complet et le nom du fichier en cours d’exécution
    echo 'Numéro de ligne de l\'instruction : ' . __LINE__.'<br>'; // Affiche le numéro de la ligne courante dans le fichier    
    echo 'Nom du répertoire : ' . __DIR__.'<br>'; // Affiche le nom du répertoire du fichier
    
    // On créer une fonction, on en reparlera plus tard :)    
    function maFonction() {
        echo 'Nom de la fonction : ' . __FUNCTION__; // Affiche le nom de la fonction
    }
    maFonction();
    echo '<br><hr>';

    // Quelques constantes prédéfinies
    echo 'PHP Version : ' . PHP_VERSION.'<br>'; // Affiche la version de PHP
    echo 'PHP OS : ' . PHP_OS.'<br>'; // Affiche le système d'exploitation
    echo 'PHP Extension : ' . PHP_EXTENSION_DIR.'<br>'; // Affiche le répertoire des extensions PHP
    echo 'PHP Le plus petit entier : ' .PHP_INT_MIN .'<br>'; // Affiche le répertoire d'inclusion PHP
    echo 'PHP Le plus grand entier : ' .PHP_INT_MAX .'<br>'; // Affiche le répertoire d'inclusion PHP
?>
