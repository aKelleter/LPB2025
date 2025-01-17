<?php

echo time();
echo'<br>';

// Convertir un timestamp en date
$timestamp = time();
$date = date('d/m/Y H:i:s', $timestamp);
echo $date;
echo'<br>';

$timestamp = time();
$date = getdate($timestamp);
echo $date['mday'] . '/' . $date['mon'] . '/' . $date['year'] . ' ' . $date['hours'] . ':' . $date['minutes'] . ':' . $date['seconds']; 