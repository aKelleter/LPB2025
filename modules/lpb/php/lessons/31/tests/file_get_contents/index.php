<?php

    $filename = "message.txt";
    $contenu = (@file_exists($filename)) ? file_get_contents($filename) : 'Le fichier source est introuvable';
    echo $contenu;     