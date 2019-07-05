<?php

use Core\Request;

if (! function_exists('dd')) {
    function dd($value = '')
    {
        die(
            "<pre>" . var_dump($value) . "</pre>"
        );

    }
}

//loading pages
if (! function_exists('page')) {
    function page($name, $data = [])
    {
        extract($data);

        require("Pages/{$name}.php");
    }
}

//setting active link
if (! function_exists('setActive')) {
    function setActive($url)
    {

        if (Request::uri() == $url) {
            echo "active";
        } else {
            echo "";
        }
    }
}

//page redirection
if (! function_exists('redirect')) {
    function redirect($path)
    {
        return header("Location: /{$path}");
    }
}