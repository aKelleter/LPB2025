<?php
session_start();

const APP_NAME = 'YON : Your Online Newspaper';
const APP_NAME_SHORT = 'YON';
const APP_VERSION = 'v0.1.0';

const PR = 'PR';        // print_r
const VD = 'VARDUMP';   // var_dump 

const TYPE_CONNECT = 'database'; // or array
 
const USER_LIST = [
    ['email' => 'tom@tom.be', 'pwd' => '1234'],
    ['email' => 'al@al.be', 'pwd' => '5678']
   ];

const DB_HOST = 'localhost';
const DB_NAME = 'yon';
const DB_USER = 'root';
const DB_PASSWORD = 'TYUPOI';
   
require_once('app/loader.php');
