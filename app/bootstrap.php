<?php

//Load Config
require_once('../app/config/config.php');

//Autoload core libraries
//Automatically loads all libraries files provided their name matches a class name
//This can save numerous hard coded require_once()...
spl_autoload_register(function($className){
  require_once('libraries/' . $className . '.php');
});


