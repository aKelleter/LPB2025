<?php
//----------------------------------------------------------------------------------------------------
session_start();
require_once($_SESSION['R'].'app/fct.php');
echo 'PHP VERSION : '.PHP_VERSION.'<br><hr>';
//----------------------------------------------------------------------------------------------------
require '_header.php';
require '_menu.php';
require_once('_content.html');
require_once('_content.html');
require '_footer.php';    
   
?>