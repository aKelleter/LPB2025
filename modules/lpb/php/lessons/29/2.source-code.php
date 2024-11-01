<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br>';
echo 'Date Timezone is : ' . date_default_timezone_get() . '<br>';
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo1 :  Obtenir et afficher le TimeStamp actuel");
$timestamp = time();
echo $timestamp;        
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo2 :  Obtenir et afficher le Timestamp d'une date donnée : 31 décembre 2023 à 23h59");
// Avec la fonction strtotime
$timestamp1 = strtotime("2023-12-31 23:59:59");
echo 'Avec strtotime() : ' . $timestamp1 . '<br>';
// Avec la fonction mktime
$timestamp2 = mktime(23, 59, 59, 12, 31, 2023);
echo 'Timestamp du 31 décembre 2023 à 23h59 (GMT+1) avec mktime() : ' . $timestamp2 . '<br>';
// Avec la fonction gmmktime
$timestamp3 = gmmktime(23, 59, 59, 12, 31, 2023);
echo 'Timestamp du 31 décembre 2023 à 23h59 (GMT) avec gmmktime() : ' . $timestamp3 . '<br>';
hr();
//----------------------------------------------------------------------------------------------------
