<?php
    $handle = @fopen("message.txt", "r"); // Le "@" masque les erreurs
    if (!$handle) {
        die("Erreur : Impossible d'ouvrir le fichier.");
    }  