<?php

    require_once "./core/functions.php";
    require_once "./globals.php";
    require_once "./core/connect.php";


    function sanitizer($str){
        $str = str_replace("script","",$str);
        $str = trim($str,"<></>");
        return $str;
    }
    echo sanitizer('<script>location.href = "https://github.com/HanThuThuHtet"</script>');
    



    // logger("hello",93);
    // logger("hello");

    // function test($x,$y,...$rest){
    //     logger($x);
    //     logger($y);
    //     print_r($rest);
    //     //logger($rest);
    // }
    // test("hiiiii","hello","hola","huhu");

?>