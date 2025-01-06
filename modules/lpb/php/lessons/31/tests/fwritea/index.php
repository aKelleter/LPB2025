<?php
     $handle = fopen("message.txt", "a");
     if ($handle) {
         fwrite($handle, "Ajout d'une nouvelle ligne.\n");
         fclose($handle);
     }    

    // Afficher le contenu du fichier
    $filename = "message.txt";
    $contenu = (@file_exists($filename)) ? file_get_contents($filename) : 'Le fichier source est introuvable';
    echo nl2br($contenu);    