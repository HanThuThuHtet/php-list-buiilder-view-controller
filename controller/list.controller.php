<?php

    function index(){
        $sql = "SELECT * FROM my";
        $query = mysqli_query($GLOBALS["connect"],$sql);
        $lists = [];
        while($row = mysqli_fetch_assoc($query)){
            $lists[] = $row ;
        }
        return view("list/index",["lists" => $lists]);
    }

    function create(){
        return view("list/create");
    }

    function store(){
        //dd($_POST);
        $name = $_POST['name'];
        $debt = $_POST['debt'];
        $sql = "INSERT INTO my (name,debt) VALUES ('$name',$debt)";
        $query = mysqli_query($GLOBALS["connect"],$sql);
        //dd($query); //1 -true
        if($query){
            //header("Location: ".route("list"));
            redirect(route("list"));
        }
        //return view("list/store");
    }


    function delete(){
        $id = $_POST['id'];
        $sql = "DELETE FROM my WHERE id=$id";
        $query = mysqli_query($GLOBALS["connect"],$sql);
        if($query){
            redirect(route("list"));
        }
    }

    function edit(){
        $id = $_GET['id'];
        $sql = "SELECT * FROM my WHERE id=$id";
        $query = mysqli_query($GLOBALS["connect"],$sql);
        $list = mysqli_fetch_assoc($query);
        return view("list/edit",["list" => $list]);
    }

    function update(){
        //dd($_POST);
        $id = $_POST['id'];
        $name = $_POST['name'];
        $debt = $_POST['debt'];
        $sql = "UPDATE my SET name='$name',debt=$debt WHERE id=$id";
        $query = mysqli_query($GLOBALS["connect"],$sql);
        redirect(route("list"));
    }

?>