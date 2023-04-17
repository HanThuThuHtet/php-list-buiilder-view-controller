<?php
    require_once "../index.php";
    // if($_SERVER["REQUEST_URI"] === "/"){
    //     require_once ViewDir."/view/home.view.php";
    // }elseif($_SERVER["REQUEST_URI"] === "/about-us"){
    //     require_once ViewDir."/view/about.view.php";
    // }
    // dd($_SERVER);


    switch($_SERVER["REQUEST_URI"]){
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
        default: 
            view("not-found");
    }
?>