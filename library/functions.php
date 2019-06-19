<?php

use Core\Request;

function dd($value = '')
{
    die(
        "<pre>" . var_dump($value) . "</pre>"
    );

}

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
