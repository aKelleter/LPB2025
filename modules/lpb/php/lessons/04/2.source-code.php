<?php
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>'; 
   // Déclaration  et intialisation de nos premières variables
   // A SAVOIR : Le signe '=' est l'opérateur d'affectation !!

   // Nous allons enregistrer le nom, le prénom et l'âge d'une personne
   // On parle de déclaration et d'initialisation de variables

    $nom = "Doe";       // Le nom de la personne, ici c'est "Doe" et c'est une chaîne de caractères (string) 
    $prenom = "John";   // Le prénom de la personne, ici c'est "John" et c'est une chaîne de caractères (string)
    $age = 25;          // L'âge de la personne, ici c'est 25 et c'est un nombre entier (integer)   
    
    // A présent, affichons nos variables prenom, nom et âge les unes à la suite des autres
    echo 'Affichage des variables nom, prenom et age avec la commande echo : <br>';
    echo $prenom, $nom, $age;
    echo '<br>--------------------------------<br>';

    // Affichons ensuite les variables prenom et nom sans concaténation en utilisant les guillemets doubles 
    echo 'Affichage avec des guillemets doubles, sans concanténations : <br>';
    echo "Prénom : $prenom, Nom : $nom, Age : $age";
    echo '<br><br>';

    // Pour finir, affichons les variables prenom et nom avec concaténation (concaténation signifie : collées les unes après les autres)
    echo 'Affichage avec concaténations avec des guillemets simples : <br>';
    echo 'Prénom : '.$prenom.', Nom : '.$nom.', Age : '.$age;
    echo '<br><br>';

    // Comment mettre à jour le contenu d'une variable ?
    echo 'Affichage de la variable prenom avant la mise à jour : '.$prenom.'<br>';
    $prenom = "Jane"; // On met à jour la variable prenom avec la valeur "Jane"
    echo 'Affichage de la variable prenom après mise à jour : '.$prenom;
    echo '<br>--------------------------------<br>';
?>
