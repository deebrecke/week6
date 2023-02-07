<?php
//This is my controller

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//start a session
session_start();

//Require autoload file
require_once("vendor/autoload.php");

//Instantiate F3 Base class
$f3 = Base::instance();

//anonymous function--not named function
$f3->route('GET /', function(){
    //echo '<h1>Week 6</h1>';
    $view = new Template();
    echo $view->render('views/info.html');
});
//Run fat free
$f3->run();

?>