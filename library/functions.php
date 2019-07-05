<?php

use Core\Request;

if (!function_exists('dd')) {
    function dd($value = '')
    {
        die(
            "<pre>" . var_dump($value) . "</pre>"
        );

    }
}

//loading pages
if (!function_exists('page')) {
    function page($viewName, $data = '')
    {
        if (is_array($data)) {
            extract($data);
        }

        if (is_object($data)) {
            extract((array)$data);
        }

        require("Pages/".func_get_args()[0].".php");
    }
}

//setting active link
if (!function_exists('setActive')) {
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
if (!function_exists('redirect')) {
    function redirect($path)
    {
        return header("Location: /{$path}");
    }
}