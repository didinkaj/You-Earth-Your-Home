<?php

namespace Core;


use Exception;

class Router
{
    public $routes = [
        'GET' => [

        ],
        'POST' => [

        ]
    ];

    /**
     * @param $file
     * @return Router
     */
    public static function load($file)
    {
        $router = new static;

        require($file);

        return $router;
    }

    /**
     * @param $uri
     * @param $controller
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }


    /**
     * @param $uri
     * @param $controller
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * @param $uri
     * @param $requestType
     * @return mixed
     * @throws Exception
     */
    public function direct($uri, $requestType)
    {
        dd($uri);
        if (array_key_exists($uri, $this->routes[$requestType])) {

            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        if(file_exists($uri)){
            return $uri;
        }

        return page('/error/page-not-found');

    }

    /**
     * @param $controller
     * @param $action
     * @return mixed
     * @throws Exception
     */
    protected function callAction($controller, $action)
    {
        $controller = sprintf("Actions\%s",$controller);

        $controller = new $controller();

        if (!method_exists($controller, $action)) {
            return page('/error/page-not-found');

        }

        return $controller->$action();

    }
}
