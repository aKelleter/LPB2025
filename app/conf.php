<?php
  
    // Définition des constantes de l'application
    const APP_NAME = 'LPB - LDB';
    const APP_UPDATE = '16-09-2024 16:30';
    const APP_VERSION = 'v0.2.0';
    const APP_YEAR = '2024-2025';
    const APP_AUTHOR = 'A. Kelleter';

    
    // Définition des constantes section/répertoires
    const MOD = 'modules';
    const HOME = 'home';
    const JS = 'javascript';
    const PHP = 'php';
    const LDB = 'ldb';
    
    

    // Définition des constantes de connexion sur un serveur externe
    /*
    const SERVER_NAME = '94.176.233.50';
    const USER_NAME = 'ifapme';
    const USER_PWD = 'ifapme+*;';
    const DB_NAME = 'blog';
    */

    const SERVER_NAME = 'localhost';
    const USER_NAME = 'root';
    const USER_PWD = '';
    const DB_NAME = 'blog';

    // Mise en session
    $_SESSION['APP'] = APP_NAME;
    
    // Inclusion des fonctions
    include_once('fct.php');