<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------
echol("Exo1 : Déclarer un tableau associatif");
$personnage = [
    'nom' => 'Link',    
    'age' => 17,
    'village' => 'Hateno ',
    'job'=> 'Epéiste',
    'force' => 10,
    'agilite' => 8
];

DBGPrint($personnage, 'PR', 'Personnage');
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo2 : Accéder à un élément du tableau associatif");
echo 'Le personnage s\'appelle <b>'.$personnage['nom'].'</b>, il a <b>'.$personnage['age'].'</b> ans et c\'est une excellent <b>'.$personnage['job'].'</b><br>';
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo3 : Parcourir les éléments d'un tableau associatif");
foreach($personnage as $key => $value){
    echo 'La clé <b>'.$key.'</b> contient la valeur <b>'.$value.'</b><br>';
}
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo4 : Ajouter un élément au tableau associatif");
$personnage['magie'] = 5;
DBGPrint($personnage, 'PR', 'Personnage');
hr();
//----------------------------------------------------------------------------------------------------   