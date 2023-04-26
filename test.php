<?php

    require_once "./core/functions.php";
    require_once "./globals.php";
    require_once "./core/connect.php";
    logger("hello",93);
    logger("hello");

    function test($x,$y,...$rest){
        logger($x);
        logger($y);
        print_r($rest);
        //logger($rest);
    }
    test("hiiiii","hello","hola","huhu");

?>