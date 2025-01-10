<?php

// Configuration de l'application
const APP_NAME = 'My First App';
const APP_VERSION = '0.2.0';
const APP_AUTHOR = 'John Doe';
const APP_YEAR = '07-01-2025';

const PR = 'print_r';
const VD = 'var_dump';

const USER_LIST = [
    ['email' => 'tom@tom.be', 'pwd' => '1234'],
    ['email' => 'al@al.be', 'pwd' => '5678']
   ];

// Type de connexion
// - 'ARRAY' : connexion avec un tableau
// - 'DATABASE' : connexion avec une base de données
const CONNEXION_TYPE = 'ARRAY';

// Constantes de connexion à la base de données
const SERVER_NAME = 'localhost';
const DB_NAME = 'blog';
const USER_NAME = 'root';
const USER_PWD = '';


// Chargement des fichiers
require_once $prepath . D_CORE.DS.'loader.php';