<?php
session_start();

// Les constantes de répertoires
const DS = DIRECTORY_SEPARATOR;
const D_CORE = 'core';
const D_CONF = 'conf';
const D_APP = 'app';
const D_ASSETS = 'assets';

// Génération du chemin d'accès au répertoire racine (suppression du nom du fichier courant)
$path = $_SERVER['PHP_SELF'];
$pattern = "/^(.*\/)[^\/]+$/";
$replacement = "$1";
$path = preg_replace($pattern, $replacement, $path);

// Chemin d'accès au répertoire racine
define('PATH_ROOT', $path);

// Chemin d'accès au répertoire parent
$prepath = (isset($prepath))? $prepath : '';

// Chargement de la configuration
require_once $prepath . D_CONF . DS . 'conf.php';

