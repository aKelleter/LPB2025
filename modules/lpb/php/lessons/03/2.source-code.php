<?php 
   // Dans ces exemples, nous ajoutons un saut de ligne à la fin de chaque instruction avec la balise Html : <br> 
   echo 'Une première ligne<br>';
   echo "Une seconde ligne juste en-dessous<br>";
   echo 'un', ' deux', ' trois', ' quatre', ' cinq', ' six', ' sept', ' huit', ' neuf', ' dix<br>';

   // Afficher le nombre 555 avec la structure echo
   echo 555; 
   echo "<br>"; 

   // Afficher la chaîne de caractère "555" avec la structure echo
   echo "555"; 
   echo "<br>";

   // Faire un truc marrant : ajouter 1 (+1) à 555 le nombre et à "555" la chaîne de caractère et observer le résultat :) 

   // Afficher avec la structure print;
   print 'Un affichage avec print<br>';

   // On ne peut pas afficher plusieurs éléments avec la structure print, comme avec echo
   //print 'un', ' deux', ' trois';

   // Les structure 'echo' et 'print' peuvent également s'utiliser avec des parenthèses (), mais on ne le fait pas.
   echo ('Appel de echo avec des parenthèses ()<br>');
   print ('Appel de print avec des parenthèses ()<br>');

   /*
        Pour afficher des appostrophes ''
        avec une chaîne délimitée par des appostrophes '' (single quotes)
        on utilise le caractère d'échappement '\' : le caractère backslash ou antislash
        même principe pour afficher des guillemets "" avec une chaîne délimitée par des guillemets "" (double quotes)
    */

    // Pour afficher l'apostrophe du mot "Aujourd'hui", on utilise le caractère d'échappement '\'
    echo 'Aujourd\'hui<br>'; 

    // Pour afficher les guillemets qui entoure le prénom John, on utilise le caractère d'échappement '\'
    echo "Bonjour \"John\", il est l'heure de se lever<br>"; 

    /*
        Pour afficher du code HTML et éviter ainsi de nombreux échappements avec l'antislash '\',
        préférez délimiter vos chaînes avec des single quotes '' (apostrophes) plutôt que des double quotes ""
        En effet, les balise HTML peuvent contenir plusieurs attributs dont les valeurs sont délimitées par des double quotes ""
     */
    echo'<div id="myID" class="article">My first article</div>';

    /*
        C'est un peu tôt dans le cours pour aborder cette notion (nous n'avons pas encore abordé les varaiables), mais sachez que
        l'on peut également utiliser la syntaxe heredoc pour afficher du code HTML, XML, etc.
     */
    $string = <<<DELIMITEUR
    <div id="myID" class="article">My second article</div>
    DELIMITEUR;

    echo $string;
?>