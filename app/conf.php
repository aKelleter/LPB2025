<?php
    // Ouverture de la session
    session_start();
    
    // Définition des constantes de l'application
    const APP_NAME = 'LPB 2025';
    const APP_UPDATE = '15-09-2024 20:30';
    const APP_VERSION = 'v0.1.1';
    const APP_YEAR = '2024-2025';
    
    // Définition des constantes section/répertoires
    const LANG = 'languages';
    const JS = 'javascript';
    const PHP = 'php';
    const EXOS = 'exos';
    

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