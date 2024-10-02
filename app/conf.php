<?php
  
    // Définition des constantes de l'application
    const APP_NAME = 'LPB - LDB <sup>3</sup>';
    const APP_UPDATE = '02-10-2024 21:25';
    const APP_VERSION = 'v0.7.1';
    const APP_YEAR = '2024-2025';
    const APP_AUTHOR = 'A. Kelleter';
    
    // Définition des constantes section/répertoires
    const MOD = 'modules';
    const HOME = 'home';
    const LESS = 'lessons';
    const JS = 'javascript';
    const PHP = 'php';
    const LDB = 'ldb';
    const LPB = 'lpb';

    const ASSETS = 'assets';
    const A_CSS = 'css';
    const A_IMG = 'img';
    const A_JS = 'js';

    const TITLE_WHAT_CODE_DOES = 'I. Que va-t-on faire ?';
    const TITLE_SOURCE_CODE = 'II. Le code source';
    const TITLE_RENDERING = 'III. Le rendu dans le navigateur';
    const TITLE_EXPLANATIONS = 'IV. Explications';
    const TITLE_RESSOURCES = 'V. Ressources additionnelles';
    
    // Constantes de connexion sur une base de données externe
    /*
    const SERVER_NAME = '94.176.233.50';
    const USER_NAME = 'ifapme';
    const USER_PWD = 'ifapme+*;';
    const DB_NAME = 'blog';
    */
    
    // Constantes de connexion sur une base de données locale
    const SERVER_NAME = 'localhost';
    const USER_NAME = 'root';
    const USER_PWD = '';
    const DB_NAME = 'blog';

    // Mise en session
    $_SESSION['APP'] = APP_NAME;
    
    // Inclusion des fonctions
    include_once('fct.php');