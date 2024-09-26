<?php 
   // Déclaration  et intialisation de nos premières variables
   // Le signe = est l'opérateur d'affectation !!

   // Nous allons enregistrer le nom, le prénom et l'âge d'une personne
    $nom = "Doe";       // Le nom de la personne, ici c'est "Doe" et c'est une chaîne de caractères (string) 
    $prenom = "John";   // Le prénom de la personne, ici c'est "John" et c'est une chaîne de caractères (string)
    $age = 25;          // L'âge de la personne, ici c'est 25 et c'est un nombre entier (integer)   
    
    // A présent, affichons nos variables prenom, nom et âge les unes à la suite des autres
    echo 'Affichage des variables nom, prenom et age avec la commande echo : <br>';
    echo $prenom, $nom, $age;
    echo '<br>--------------------------------<br>';

    // Réalisons un affichage (avec des guillemets simples) plus lisible avec l'aide de l'opérateur de concaténation (le point .) 
    echo 'Affichage plus "propre" des variables nom, prenom et age avec la commande echo (et des guillemets simples) et le caractère de concaténation<br>';
    echo 'Prénom : '.$prenom.', Nom : '.$nom.', Age : '.$age;
    echo '<br>--------------------------------<br>';

    // Réalisons un affichage (avec des guillemets doubles) plus lisible 
    echo 'Affichage plus "propre" des variables nom, prenom et age avec la commande echo (et des guillemets doubles)<br>';
    echo "Prénom : $prenom, Nom : $nom, Age : $age";
    echo '<br>--------------------------------<br>';

    // Mettre à jour le contenu d'une variable
    echo 'Affichage de la variable prenom avant la mise à jour : '.$prenom.'<br>';
    $prenom = "Jane"; // On met à jour la variable prenom avec la valeur "Jane"
    echo 'Affichage de la variable prenom après mise à jour : '.$prenom;
    echo '<br>--------------------------------<br>';
?>
