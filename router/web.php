<?php

    $uri = $_SERVER["REQUEST_URI"];
    $uriArr = parse_url($uri);
    $path = $uriArr["path"];

    //request -> route -> controller
        //Route
        const Routes = [
            "/" => "page@home",
            "/about-us" => "page@about",
            "/list" => "list@index",


        ];

        //dd(Routes[$path] );  //in_array => values
        if(array_key_exists($path,Routes)){ //key,array
            dd(Routes[$path]);
        }else{
            view("not-found");
        }





?>