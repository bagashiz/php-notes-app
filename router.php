<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];

// routeToController sets the controller to be loaded based on the URI
function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

// abort sets the response code and loads the view
function abort($code = 404)
{
    http_response_code($code);

    require "views/{$code}.view.php";

    die();
}

routeToController($uri, $routes);