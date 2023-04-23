<?php

    function index(){
        $sql = "SELECT * FROM my";
        if(!empty($_GET["q"])){
            $q = $_GET["q"];
            $sql .= " WHERE name LIKE '%$q%' ";
        }
        //$query = run($sql);
        // $lists = [];
        // while($row = mysqli_fetch_assoc($query)){
        //     $lists[] = $row ;
        // }
        //return view("list/index",["lists" => $lists]);

        $total = first("SELECT count(id) AS total FROM my")["total"];
        //dd($total); //100
        $limit = 10;
        $totalPages = $total / $limit;
        $currentPage = isset($_GET["page"]) ? $_GET["page"] : 1;
        $offset = ($currentPage - 1) * $limit;
        $sql .= " LIMIT $offset,$limit";
        //dd(all($sql));


        //total ?
        //limit => rows per page => 10,5,....
        //totalPage = total/limit

        //currentPage 1 
        //offset = 0 =( currentPage - 1 ) * limit

        //SELECT * FROM my LIMIT 0,10;
        //SELECT * FROM my LIMIT 10,10;
        //SELECT * FROM my LIMIT 20,10;
        

        return view("list/index",["lists" => all($sql)]);
    }

    function create(){
        return view("list/create");
    }

    function store(){
        //dd($_POST);
        $name = $_POST['name'];
        $debt = $_POST['debt'];
        $sql = "INSERT INTO my (name,debt) VALUES ('$name',$debt)";
        $query = run($sql);
        //setSession("List Created Successfully!");
        //dd($query); //1 -true
        //dd($GLOBALS["connect"]);
        //mysqli_close($GLOBALS["connect"]);
        //dd($GLOBALS["connect"]);
        if($query){
            //header("Location: ".route("list"));
            redirect(route("list"),"List Created Successfully!");
        }
        //return view("list/store");
    }


    function delete(){
        $id = $_POST['id'];
        $sql = "DELETE FROM my WHERE id=$id";
        $query = run($sql);
        //setSession("List Deleted Successfully!");
        if($query){
            redirect(route("list"),"List Deleted Successfully!");
        }
    }

    function edit(){
        $id = $_GET['id'];
        $sql = "SELECT * FROM my WHERE id=$id";
        // $query = run($sql);
        // $list = mysqli_fetch_assoc($query);
        //return view("list/edit",["list" => $list]);
        return view("list/edit",["list" => first($sql)]);
    }

    function update(){
        //dd($_POST);
        $id = $_POST['id'];
        $name = $_POST['name'];
        $debt = $_POST['debt'];
        $sql = "UPDATE my SET name='$name',debt=$debt WHERE id=$id";
        $query = run($sql);
        //setSession("List Updated Successfully!");
        redirect(route("list"),"List Updated Successfully!");
    }


    

?>