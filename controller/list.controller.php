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

    function creat(){

    }

?>