<?php
    $handle = fopen("message.txt", "r");
    if ($handle) {
        while (($char = fgetc($handle)) !== false) {
            echo $char;
        }
        fclose($handle);
    }    