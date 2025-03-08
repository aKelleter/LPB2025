<?php
session_start();

const APP_NAME = 'SUPERLOGIN';
const APP_VERSION = 'v0.1.0';

const PR = 'PR';        // print_r
const VD = 'VARDUMP';   // var_dump 

const TYPE_CONNECT = 'database'; // or array
 
const USER_LIST = [
    ['email' => 'tom@tom.be', 'pwd' => '1234'],
    ['email' => 'al@al.be', 'pwd' => '5678']
   ];

const DB_HOST = 'localhost';
const DB_NAME = 'login';
const DB_USER = 'root';
const DB_PASSWORD = 'TYUPOI';
   
require_once('loader.php');
