<?php

//echo PHP_OS;
//echo strtoupper(substr(PHP_OS,0,3));
$port = rand(9000,9999);
if(strtoupper(substr(PHP_OS,0,3)) === "WIN"){
    system("cd public && php -S localhost:$port");
}else{
    system("cd public;php -S localhost:$port;");
}





// $port = rand(9000,9999);

// if(strtoupper(substr(PHP_OS,0,3)) === "WIN"){
//     system("cd public && php -S localhost:$port");

// }else{
//     system("cd public; php -S localhost:$port");
// }

?>