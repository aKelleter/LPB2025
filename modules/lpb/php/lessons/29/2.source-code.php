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
echol("Exo4 : Obtenir et afficher le Timestamp d'une date donnée avec strtotime()");
$timestmp1 = strtotime('1970/02/24 02:40:00');
$timestmp2 = strtotime('1970/02/24');
$timestmp3 = strtotime('next friday');
$timestmp4 = strtotime('2 days ago');
$timestmp5 = strtotime('+1 day');    

echo 'Timestamp 24 février 1970 02h40 (GMT+1) : ' .$timestmp1. '<br>';
echo 'Timestamp 24 février 1970 minuit (GMT+1) : ' .$timestmp2. '<br>';
echo 'Timestamp du vendredi suivant minuit (GMT+1) : ' .$timestmp3. '<br>';
echo 'Timestamp il y a 48h : ' .$timestmp4. '<br>';
echo 'Timestamp dans 24h : ' .$timestmp5. '<br>';
hr();
// ----------------------------------------------------------------------------------------------------
echol("Exo5 : Convertir un Timestamp en date");
$timestamp = time();
$date = date('d/m/Y H:i:s', $timestamp);
echo 'Date : ' . $date . ' du timestamp : ' . $timestamp . '<br>';
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo6 : Utiliser getdate() pour convertir un timestamp en un tableau associatif représentant la date et l'heure ainsi que d'autres informations");
$timestamp = time();
$date = getdate($timestamp);
echo $date['mday'] . '/' . $date['mon'] . '/' . $date['year'] . ' ' . $date['hours'] . ':' . $date['minutes'] . ':' . $date['seconds']; 
DBGPrint($date);
hr();
//----------------------------------------------------------------------------------------------------