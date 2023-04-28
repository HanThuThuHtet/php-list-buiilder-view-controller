<?php

    function index(){
        $sql = "SELECT * FROM inventories";
        if(!empty($_GET["q"])){
            $q = $_GET["q"];
            $sql .= " WHERE item LIKE '%$q%' ";
        }
        return view("inventory/index",["lists" => paginate($sql,8)]);
    }

    function create(){
        return view("inventory/create");
    }

    function store(){
        //dd($_POST);
        $item = $_POST['item'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        if(empty(trim($_POST['item']))){
            dd("item name required");
        }elseif(strlen($_POST['item']) < 3){
            dd("item name is too short");
        }elseif(strlen($_POST['item']) > 10){
            dd("item name is too long");
        }elseif(!preg_match("/^[a-zA-Z0-9 ]*$/",$_POST['item'])){
            dd("item name unmatched");
        }

        if(empty(trim($_POST['price']))){
            dd("price required");
        }elseif(!is_numeric($_POST['price'])){
            dd("price must be number");
        }elseif($_POST['price'] < 100){
            dd("price must be greater than 100");
        }elseif($_POST['price'] > 999999){
            dd("price must be less than 999999");
        }

        if(empty(trim($_POST['stock']))){
            dd("stock required");
        }elseif(!is_numeric($_POST['stock'])){
            dd("stock must be number");
        }elseif($_POST['stock'] < 1){
            dd("stock must be greater than 1");
        }elseif($_POST['stock'] > 999999){
            dd("stock must be less than 999999");
        }



        dd("data ready");
        //$sql = "INSERT INTO inventories (item,price,stock) VALUES ('$item',$price,$stock)";
        run("INSERT INTO inventories (item,price,stock) VALUES ('$item',$price,$stock)");
        return redirect(route("inventory"),"Item Created Successfully!");
        
        //setSession("List Created Successfully!");
        //dd($query); //1 -true
        //dd($GLOBALS["connect"]);
        //inventoriessqli_close($GLOBALS["connect"]);
        //dd($GLOBALS["connect"]);
       
            //header("Location: ".route("list"));
             
        //return view("inventory/store");
    }


    function delete(){
        $id = $_POST['id'];
        $sql = "DELETE FROM inventories WHERE id=$id";
        $query = run($sql);
        //setSession("List Deleted Successfully!");
        if($query){
            //redirect(route("list"),"List Deleted Successfully!");
           return redirect($_SERVER["HTTP_REFERER"],"Item Deleted Successfully!"); //after delete from page 4 redirect to page 4
        }
    }

    function edit(){
        $id = $_GET['id'];
        $sql = "SELECT * FROM inventories WHERE id=$id";
        // $query = run($sql);
        // $list = inventoriessqli_fetch_assoc($query);
        //return view("inventory/edit",["list" => $list]);
        return view("inventory/edit",["list" => first($sql)]);
    }

    function update(){
        //dd($_POST);
        $id = $_POST['id'];
        $item = $_POST['item'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        $sql = "UPDATE inventories SET item='$item',price=$price,stock=$stock WHERE id=$id";
        run($sql);
       // run("UPDATE inventories SET item='$item',price=$price,stock=$stock WHERE id=$id");
        //setSession("List Updated Successfully!");
        //redirect(route("list"),"List Updated Successfully!");
        return redirect(route("inventory"),"Item Updated Successfully!"); 
    }


    

?>