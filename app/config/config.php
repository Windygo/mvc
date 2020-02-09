<?php

//Database Params
define ('DB_HOST', 'localhost');
define ('DB_USER', '_YOUR_USER_');
define ('DB_PASS', '_YOUR_PASS_');
define ('DB_NAME', '_YOUR_DBNAME_'); //test mvc temp. db

//App Root
define ('APP_ROOT', dirname(dirname(__FILE__)));

//Url Root
define ('URL_ROOT', $_SERVER['SERVER_NAME']);

//Site Name
define('SITE_NAME', basename(dirname(dirname(dirname(__FILE__))))); //basename() returns the trailing component...

//Site Url
define ('SITE_URL', URL_ROOT . '/' . SITE_NAME );