<?php

namespace Core;

// Router is a class that handles routing
class Router
{
    protected $routes = [];

    // add adds a route given a method, uri and controller
    protected function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => strtoupper($method)
        ];
    }

    // get adds a route with the GET method
    public function get($uri, $controller)
    {
        $this->add('GET', $uri, $controller);
    }

    // post adds a route with the POST method
    public function post($uri, $controller)
    {
        $this->add('POST', $uri, $controller);
    }

    // put adds a route with the PUT method
    public function delete($uri, $controller)
    {
        $this->add('DELETE', $uri, $controller);
    }

    // patch adds a route with the PATCH method
    public function patch($uri, $controller)
    {
        $this->add('PATCH', $uri, $controller);
    }

    // route routes the request to the controller
    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }

    // abort sets the response code and loads the view
    protected function abort($code = Response::NOT_FOUND)
    {
        abort($code);
    }
}
