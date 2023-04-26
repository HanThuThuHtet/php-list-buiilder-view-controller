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
            "/list-create" => "list@create",
            // "/list-store" => [
            //     "method" => "post",
            //     "run" => "list@store"
            // ],
            "/list-store" => ["post","list@store"],
            "/list-edit" => "list@edit",
            "/list-update" => ["put","list@update"],
            "/list-delete" => ["delete","list@delete"],


            "/inventory" => "inventory@index",
            "/inventory-create" => "inventory@create",
            "/inventory-store" => ["post","inventory@store"],
            "/inventory-edit" => "inventory@edit",
            "/inventory-update" => ["put","inventory@update"],
            "/inventory-delete" => ["delete","inventory@delete"]


        ];

        //dd(Routes[$path] );  //in_array => values
        if(array_key_exists($path,Routes) && is_array(Routes[$path]) && checkRequestMethod(Routes[$path][0])){ //key,array
            
            //dd(Routes[$path]);
            //dd($_SERVER["REQUEST_METHOD"]);
            //dd($_SERVER);
            controller(Routes[$path][1]);

            
        }elseif(array_key_exists($path,Routes) && !is_array(Routes[$path])){
            //dd(Routes[$path]);
            controller(Routes[$path]);
        }
        else{
            view("not-found");
        }





?>