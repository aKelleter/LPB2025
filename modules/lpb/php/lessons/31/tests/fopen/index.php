<?php
    $handle = fopen("message.txt", "w");
    if ($handle) {
        echo "Fichier ouvert avec succès en mode écriture.";
        fclose($handle); // Toujours fermer un fichier après utilisation
    } else {
        echo "Impossible d'ouvrir le fichier.";
    }