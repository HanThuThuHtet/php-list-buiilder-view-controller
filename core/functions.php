<?php

    //die and dump
    function dd($data,$showType = false):void{
        echo "<pre style=' background-color:#1d1d1d ; color:#cdcdcd; padding: 20px ; margin : 10px ; border-radius: 10px ; line-height: 1.2rem;'>";
        if($showType){
            var_dump($data);
        }else{
            print_r($data);
        }
        echo "</pre>";
        die();
    }

    function url(string $path = null): string{
        $url = isset($_SERVER["HTTPS"]) ? "https" : "http";
        $url .= "://";
        $url .= $_SERVER["HTTP_HOST"];
        if(isset($path)){
            $url .= "/";
            $url .= $path;
        }
        return $url;
    }

    function view(string $viewName,array $data=null):void{
        //array to var
        if(!is_null($data)){
            foreach($data as $key => $value){
                //$key > 'myName' > $myName  //$value = 'han'
                ${$key} = $value; //$myName = 'han'
                //dynamic var name
            }
        }
        //$shareData = $data; //shareData comes first and the require_once file get that data
        require_once ViewDir."/$viewName.view.php";

    }

    function controller(string $controllerName):void{
        //explode => string to array
        //list@index => ['list' , 'index' ];
        $controllerNameArr = explode('@',$controllerName);
        $controller = $controllerNameArr[0]; //list
        $functionName = $controllerNameArr[1]; //index
        require_once ControllerDir."/$controller.controller.php";
        //dynamic fun invoke
        call_user_func($functionName);

        //route => controller => function => view
    }
    
    function route(string $path,array $queries = null):string{ //query from data passing
        $url = url($path);
        if(!is_null($queries)){
            $url .= "?".http_build_query($queries); //convert to uri
        }
        return $url;
    }

    function redirect(string $url,string $message = null):void{
        if(!is_null($message)) setSession($message);
        header("Location:".$url);
    }

    function checkRequestMethod(string $methodName){
        $result = false;
        $methodName = strtoupper($methodName); //post,POST
        $serverRequestMethod = $_SERVER["REQUEST_METHOD"];
        if($methodName === "POST" && $serverRequestMethod === "POST" ){
            $result = true;
        }
        elseif($methodName === "PUT" && $serverRequestMethod === "POST" && !empty($_POST["_method"]) &&  strtoupper($_POST["_method"]) === "PUT") {//_method from html form
            $result = true;
        }
        elseif($methodName === "DELETE" && $serverRequestMethod === "POST" && !empty($_POST["_method"]) && strtoupper($_POST["_method"]) === "DELETE"){
            $result = true;
        }
        return $result;
    }

    function alert(string $message,string $color = "success"){
        return "<div class='alert alert-$color'>$message</div>";
    }

    //Start Session Function

    function setSession(string $message ,string $key="message"):void{
        //$_SESSION[key] = value
        $_SESSION[$key] = $message;
    }

    function includeSession(string $key ="message"):bool{
        if(!empty($_SESSION[$key])) return true;
        return false;
    }

    function showSession(string $key = "message"):string{
        $message = $_SESSION[$key];
        unset($_SESSION[$key]);
        return $message;
    }

    //End Session Function



    //Start database function

    function run(string $sql,bool $closeConnection = false):object|bool{
        // $query = mysqli_query($GLOBALS["connect"],$sql);
        // $closeConnection &&  mysqli_close($GLOBALS["connect"]);
        // return $query;
        try{
            $query = mysqli_query($GLOBALS["connect"],$sql);
            $closeConnection &&  mysqli_close($GLOBALS["connect"]);
            return $query;
        }catch(Exception $e){
            dd($e);
        }
    }


    function all(string $sql):array{
        $lists = [];
        $query = run($sql);
        while ($row = mysqli_fetch_assoc($query)){
            $lists[]= $row;
        }
        return $lists;
    }

    function first(string $sql):array{
        $query = run($sql);
        $list = mysqli_fetch_assoc($query);
        return $list;
    }

    //End database function
    

?>