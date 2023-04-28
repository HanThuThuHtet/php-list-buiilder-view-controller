<?php

    function index(){
        $sql = "SELECT * FROM my";
        if(!empty($_GET["q"])){
            $q = sanitizer($_GET["q"],true);
            $sql .= " WHERE name LIKE '%$q%' ";
        }
        //$query = run($sql);
        // $lists = [];
        // while($row = mysqli_fetch_assoc($query)){
        //     $lists[] = $row ;
        // }
        //return view("list/index",["lists" => $lists]);

        //$total = first("SELECT count(id) AS total FROM my")["total"];
        // $total = first(str_replace("*","COUNT(id) AS total",$sql))["total"];
        // //dd($total); //100
        // $limit = 10;
        // $totalPages = ceil($total / $limit);
        // $currentPage = isset($_GET["page"]) ? $_GET["page"] : 1;
        // $offset = ($currentPage - 1) * $limit;
        // $sql .= " LIMIT $offset,$limit";
        // $links = [];
        // for($i = 1 ; $i <= $totalPages ; $i++){
        //     $queries = $_GET;
        //     $queries["page"] = $i;
        //     $url = url().$GLOBALS['path']."?".http_build_query($queries);
        //     //$url = url().$GLOBALS['path']."?page=".$i;
        //     //$links[] = url().$GLOBALS["path"]."?page=".$i;
        //     $links[] = [
        //         "url" => $url,
        //         "is_active" => $i == $currentPage ? "active" : "",
        //         "page_number" => $i
        //     ];
        // }
        // $lists = [
        //     "total" => $total,
        //     "limit" => $limit,
        //     "total_page" => $totalPages,
        //     "current_page" => $currentPage,
        //     "data" => all($sql),
        //     "links" => $links
        // ];
        //dd($lists);


        //total ?
        //limit => rows per page => 10,5,....
        //totalPage = total/limit

        //currentPage 1 
        //offset = 0 =( currentPage - 1 ) * limit

        //SELECT * FROM my LIMIT 0,10;
        //SELECT * FROM my LIMIT 10,10;
        //SELECT * FROM my LIMIT 20,10;
        

        //return view("list/index",["lists" => all($sql)]);
        return view("list/index",["lists" => paginate($sql,8)]);
    }

    function create(){
        return view("list/create");
    }

    function store(){
        //dd($_POST);
        $name = sanitizer($_POST['name']);
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
             return redirect(route("list"),"List Created Successfully!");
        }
        //return view("list/store");
    }


    function delete(){
        $id = $_POST['id'];
        $sql = "DELETE FROM my WHERE id=$id";
        $query = run($sql);
        //setSession("List Deleted Successfully!");
        if($query){
            //redirect(route("list"),"List Deleted Successfully!");
           return redirect($_SERVER["HTTP_REFERER"],"List Deleted Successfully!"); //after delete from page 4 redirect to page 4
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
        //redirect(route("list"),"List Updated Successfully!");
        return redirect($_SERVER["HTTP_REFERER"],"List Updated Successfully!"); 
    }


    

?>