<?php
//Start Session
session_start();

//Include Configuration
require_once('config/config.php');

//Helper Function Files
require_once('helpers/system_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/db_helper.php');

//Autoload Classes
// function __autoload($class_name){
// 	require_once('libraries/'.$class_name . '.php');
// }


function my_autoloader($class_name) {
    include 'libraries/' . $class_name . '.php';
}

spl_autoload_register('my_autoloader');

// Or, using an anonymous function

// spl_autoload_register(function ($class) {
//     include 'classes/' . $class . '.class.php';
// });