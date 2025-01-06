<?php
     $filename = "message.txt";

     // Vérification de l'existence
     if (!file_exists($filename)) {
         $handle = fopen($filename, "w");
         fwrite($handle, "Ligne initiale.\n");
         fclose($handle);
     } else {
         $handle = fopen($filename, "a");
         fwrite($handle, "Nouvelle ligne ajoutée.\n");
         fclose($handle);
     }
     
     // Lecture et affichage
     echo "<pre>";
     echo file_get_contents($filename);
     echo "</pre>";
