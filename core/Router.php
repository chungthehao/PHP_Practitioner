<?php

namespace App\Core;

class Router
{
    protected $routes = [
        'GET'   => [],
        'POST'  => []
    ];

    public static function load($file)
    {
        $router = new static; // tạo 1 instance trong static method
        require $file;
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        // die(var_dump($uri, $requestType));
        if (array_key_exists($uri, $this->routes[$requestType])) {
            // return $this->routes[$requestType][$uri];

            # PagesController@about
            // die($this->routes[$requestType][$uri]);
            $this->callAction(...explode('@', $this->routes[$requestType][$uri]));
            return;
        }

        throw new Exception('No route defined for this URI.');
    }

    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if ( ! method_exists($controller, $action)) {
            throw new Exception(
                get_class($controller)." does not respond to the {$action} action."
            );
        }
        $controller->$action();
        return;
    }
}