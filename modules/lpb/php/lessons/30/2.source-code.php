<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------
echol("Exo1 : Quelques exemples");
echo '<b>d/m/Y</b> : ' . date('d/m/Y'). '<br>';
echo '<b>l d m Y h:i:s</b> : ' . date('l d m Y h:i:s'). '<br>';
echo '<b>c</b> (ISO 8601) : ' . date('c'). '<br>';
echo '<b>r</b> (RFC 2822) : ' . date('r'). '<br>';
hr();
//----------------------------------------------------------------------------------------------------
echol("Exo2 : Gestion du décallage horaire");
echo 'Timezone : ' . date_default_timezone_get().'<br>';
echo date('d m Y H:i:s'). '(LOCAL)<br>';
echo gmdate('d-m-Y H:i:s'). '(GMT)<br>';
//---
date_default_timezone_set('Asia/Seoul');   //Seoul = 8:00 heures plus tard à Séoul
echo 'Timezone : ' . date_default_timezone_get().'<br>';
echo date('d m Y H:i:s'). '(SEOUL LOCAL)<br>'; 
date_default_timezone_set('Europe/Brussels'); // Retour à l'heure de Bruxelles 
hr();
//----------------------------------------------------------------------------------------------------
echol('Exo3 : Les dates en français');
// Il faut activer au préalable l'extension intl dans php.ini

// Version procédurale 
$fmt = datefmt_create('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::FULL, 'Europe/Paris', IntlDateFormatter::GREGORIAN);
echo $fmt->format(new DateTime('1970-02-24 02:40:00')) .'<br>';

// Version orientée objet
$date = new DateTime('1970-02-24 02:40:00');
$fmt = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::FULL, 'Europe/Paris', IntlDateFormatter::GREGORIAN);
echo $fmt->format($date).'<br>';

hr();
//----------------------------------------------------------------------------------------------------
