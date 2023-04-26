<?php

    function index(){
        $sql = "SELECT * FROM inventories";
        if(!empty($_GET["q"])){
            $q = $_GET["q"];
            $sql .= " WHERE name LIKE '%$q%' ";
        }
        return view("inventory/index",["lists" => paginate($sql,8)]);
    }

    function create(){
        return view("inventory/create");
    }

    function store(){
        //dd($_POST);
        $name = $_POST['name'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        //$sql = "INSERT INTO inventories (name,price,stock) VALUES ('$name',$price,$stock)";
        run("INSERT INTO inventories (name,price,stock) VALUES ('$name',$price,$stock)");
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
           return redirect($_SERVER["HTTP_REFERER"],"List Deleted Successfully!"); //after delete from page 4 redirect to page 4
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
        $name = $_POST['name'];
        $debt = $_POST['debt'];
        $sql = "UPDATE inventories SET name='$name',debt=$debt WHERE id=$id";
        $query = run($sql);
        //setSession("List Updated Successfully!");
        //redirect(route("list"),"List Updated Successfully!");
        return redirect($_SERVER["HTTP_REFERER"],"List Updated Successfully!"); 
    }


    

?>