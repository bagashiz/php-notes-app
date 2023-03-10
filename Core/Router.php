<?php

namespace Core;

use Core\Middleware\Auth;
use Core\Middleware\Guest;
use Core\Middleware\Middleware;

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
            'method' => strtoupper($method),
            'middleware' => null,
        ];

        return $this;
    }

    // get adds a route with the GET method
    public function get($uri, $controller)
    {
        return $this->add('GET', $uri, $controller);
    }

    // post adds a route with the POST method
    public function post($uri, $controller)
    {
        return $this->add('POST', $uri, $controller);
    }

    // put adds a route with the PUT method
    public function delete($uri, $controller)
    {
        return $this->add('DELETE', $uri, $controller);
    }

    // patch adds a route with the PATCH method
    public function patch($uri, $controller)
    {
        return $this->add('PATCH', $uri, $controller);
    }

    // only acts as a filter for routes
    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;

        return $this;
    }

    // route routes the request to the controller
    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                // resolve the middleware if exists
                Middleware::resolve($route['middleware']);

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
