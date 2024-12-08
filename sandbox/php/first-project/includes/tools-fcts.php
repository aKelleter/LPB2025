<?php

/**
 * Affiche le contenu d'une variable dans une balise <pre>
 * 
 * @param mixed $var 
 * @return void 
 */
function dispVar($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
} 