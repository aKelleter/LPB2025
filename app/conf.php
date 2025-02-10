<?php
  
    // Définition des constantes de l'application   
    const APP_NAME = 'LPB - LDB <sup>3</sup>';
    const APP_UPDATE = '10022025 - 16:45';
    const APP_VERSION = 'v0.67.0'.' - '.APP_UPDATE;

    const APP_YEAR = '2024-2025';
    const APP_AUTHOR = 'A. Kelleter';
    
    // Définition des constantes section/répertoires
    const MOD = 'modules';
    const HOME = 'home';
    const LESS = 'lessons';
    const VENDORS = 'vendors';
    const JS = 'javascript';
    const PHP = 'php';
    const OTHERS = 'others';
    const LDB = 'ldb';
    const LPB = 'lpb';
    const SANDBOX = 'sandbox';
    const EVALS = 'evals';
    const JAN = 'janvier';
    const COURS = 'cours';

    const ASSETS = 'assets';
    const A_CSS = 'css';
    const A_IMG = 'img';
    const A_JS = 'js';

    // Titres
    const TITLE_WHAT_CODE_DOES = 'La théorie';
    const TITLE_SOURCE_CODE = 'Le code source';
    const TITLE_RENDERING = 'Le rendu dans le navigateur';
    const TITLE_EXPLANATIONS = 'Le résumé / explications';
    const TITLE_RESSOURCES = 'Les ressources additionnelles';

    // Noms de fichiers
    const FILENAME_WCD = '1.theory-wcd.html';
    const FILENAME_SOURCE_CODE = '2.source-code.php';
    const FILENAME_RENDERING = '3.rendering.html';
    const FILENAME_EXPLANATION = '4.explanations.php';
    const FILENAME_RESSOURCES = '5.ressources.php';
       
    // Constantes de connexion sur une base de données locale
    const SERVER_NAME = 'localhost';
    const USER_NAME = 'root';
    const USER_PWD = '';
    const DB_NAME = 'blog';

    // Mise en session
    $_SESSION['APP'] = APP_NAME;
    
    // Inclusion des fonctions
    require_once('fct.php');