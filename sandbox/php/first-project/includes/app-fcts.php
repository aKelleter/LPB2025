<?php

/**
 * Retourne la structure HTML de la section head
 * 
 * @param mixed $title 
 * @return string 
 */
function getHtmlHead($title) {
    $html =  '  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="'.BOOTSTRAP_URL.'css/bootstrap.min.css">
        <link rel="stylesheet" href="'.CSS_URL.'style.css">
        
        <title>'. APP_NAME .' : '. $title.'</title>
    </head>
    ';

    return $html;
}