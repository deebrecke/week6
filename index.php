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
$f3->route('GET /', function($f3){

    //add key-value pairsto the f3 "hive"
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');

    //add food and color
    $f3->set('food', 'sushi');
    $f3->set('color', 'purple');

    $f3->set('temp', 67);
    $f3->set('radius', 10);

//define and array of fruits
    $fruits = array("apple", "banana", "orange");

    $f3->set('fruits', $fruits);

//    foreach($fruits as $fruit){
//        echo $fruit;
//    }

    $f3->set('colors', array("red", "blue" "yellow"));




    $view = new Template();
    echo $view->render('views/info.html');
});
//Run fat free
$f3->run();

?>