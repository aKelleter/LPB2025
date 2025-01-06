<?php
     $handle = fopen("message.txt", "w");
     if ($handle) {
         fwrite($handle, "Bonjour, ceci est une ligne écrite en PHP.\n");
         fwrite($handle, "Voici une autre ligne.");
         fclose($handle);
     }

    // Afficher le contenu du fichier
    $filename = "message.txt";
    $contenu = (@file_exists($filename)) ? file_get_contents($filename) : 'Le fichier source est introuvable';
    echo $contenu;
    
    // En transformant les sauts de ligne en balises HTML
    //echo nl2br($contenu);    