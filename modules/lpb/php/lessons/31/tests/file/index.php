<?php
    $lignes = file("message.txt");
    foreach ($lignes as $ligne) {
        echo $ligne . "<br>";
    }    