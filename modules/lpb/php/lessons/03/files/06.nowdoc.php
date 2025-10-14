<?php
    $texte = <<<'message'
        Ceci est un texte mais avec nowdoc
        sur plusieurs lignes. <br>
        Il peut contenir des 'guillemets simples'
        ou des "guillemets doubles"
        sans avoir besoin de les échapper.
    message;

    echo $texte;