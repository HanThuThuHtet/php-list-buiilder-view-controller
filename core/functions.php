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

    function redirect($url):void{
        header("Location:".$url);
    }


    

?>