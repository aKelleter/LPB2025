<?php
    $handle = fopen("message.txt", "r+");
    if (flock($handle, LOCK_EX)) { // LOCK_EX pour verrou exclusif
        fwrite($handle, "Écriture sécurisée.\n");
        echo 'Écriture sécurisée terminée.<br>';
        flock($handle, LOCK_UN); // Déverrouillage
    }
    fclose($handle);