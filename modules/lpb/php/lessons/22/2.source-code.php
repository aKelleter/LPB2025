<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------
echol("Exo1 : Créer un tableau multidimensionnel");
$tab = [
    'A' => ['a1', 'a2', 'a3'],
    'B' => ['b1', 'b2', 'b3'],
    'C' => ['c1', 'c2', 'c3']
];
$tab2 = [
    ['A', 'B', 'C'],
    ['D', 'E', 'F'],
    ['G', 'H', 'I']
];
$personnages = [
   "Link" => ["Age" => 17, "Type" => "Epéiste", "Vie" => 3],
   "Zelda" => ["Age" => 17, "Type" => "Magie", "Vie" => 4],
   "Ganon" => ["Age" => 25, "Type" => "Tyran", "Vie" => 5]
];
DBGPrint($tab, 'PR', '$tab :');
DBGPrint($tab2, 'PR', '$tab2 :');
DBGPrint($personnages, 'PR', '$tab3 :');
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo2 : Afficher les valeurs du tableau avec 2 boucles foreach imbriquées");
foreach($tab as $key => $value) {
    echo 'Clé : '.$key.'<br>';
    foreach($value as $v) {
        echo ' - Value : '.$v.'<br>';
    }
}
echol("-------------------------------");
foreach($tab2 as $key => $value) {
    echo 'Clé : '.$key.'<br>';
    foreach($value as $v) {
        echo ' - Value : '.$v.'<br>';
    }
}
echol("-------------------------------");
foreach($personnages as $perso => $properties) {
    echo 'Personnage : '.$perso.'<br>';
    foreach($properties as $name => $value) {
        echo ' - ' . $name . ' : '.$value.'<br>';
    }
}
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo3 : Afficher les valeurs d'un tableau avec print_r et var_dump");
echol("<b>Avec print_r() :</b>");
echo "<pre>";
print_r($tab);
echo "</pre>";
echol("<br>Avec <b>var_dump :</b>");
echo "<pre>";
var_dump($tab);
echo "</pre>";
hr();
//----------------------------------------------------------------------------------------------------