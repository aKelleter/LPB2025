<?php
    $handle = fopen("message.txt", "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            echo $line . "<br>";
        }
        fclose($handle);
    } else {
        echo "Impossible de lire le fichier.";
    }