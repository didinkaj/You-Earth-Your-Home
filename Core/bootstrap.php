<?php

use Core\App;
use Core\Request;
use DB\Connection;
use DB\QueryBuilder;

App::bind('config', require(__DIR__ . '/../config.php'));  //adding app configurations to the app class

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

//loading pages
function page($name, $data = [])
{
    extract($data);
    require("Pages/{$name}.php");
}

//setting active link
function setActive($url){

    if(Request::uri() == $url){
        echo "active";
    }else{
        echo "";
    }
}

//page redirection
function redirect($path)
{
    return header("Location: /{$path}");
}


//enable error reporting

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

//load important files required by the app to run