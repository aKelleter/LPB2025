<?php
session_start();

const APP_NAME = 'SUPERLOGIN';
const APP_VERSION = 'v0.1.0';

const USER_LIST = [
    ['email' => 'tom@tom.be', 'pwd' => '1234'],
    ['email' => 'al@al.be', 'pwd' => '5678']
   ];

require_once('loader.php');
