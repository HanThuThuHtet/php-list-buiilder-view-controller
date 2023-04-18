<?php
    require_once "../index.php";
    // if($_SERVER["REQUEST_URI"] === "/"){
    //     require_once ViewDir."/view/home.view.php";
    // }elseif($_SERVER["REQUEST_URI"] === "/about-us"){
    //     require_once ViewDir."/view/about.view.php";
    // }
    // dd($_SERVER);

    $uri = $_SERVER["REQUEST_URI"];
    //dd($uri); // /list-create?q=acv
    //dd(parse_url($uri)); //Array([path] => /list-create [query] => q=acv)
    $uriArr = parse_url($uri);
    $path = $uriArr['path']; ///list-create

    switch($path){
        case "/" :
            view("home",['myName' => "han",'myAge' => 23]);
            break;
        case "/about-us" :
            view("about");
            break;
        case "/list" :
            // view("list/index");
            controller('list@index'); //use index function in list.controller.php
            break;
        case "/list-create":
            controller('list@create');
            break;
        //case "/list-store" && $_SERVER["REQUEST_METHOD"] === "POST":
        case "/list-store" :
            controller('list@store');
            break;
        case "/list-delete":
            controller("list@delete");
            break;
        case "/list-edit":
            controller("list@edit");
            break;
        case "/list-update":
            controller("list@update");
            break;
        default: 
            view("not-found");
    }
?>