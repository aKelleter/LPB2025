<?php
    if (file_exists("message.txt")) {
        unlink("message.txt");
        echo "Fichier supprimé.";
    } else {
        echo "Le fichier n'existe pas.";
    }    