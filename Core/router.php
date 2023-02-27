<?php

$routes = require base_path("routes.php");

// routeToController sets the controller to be loaded based on the URI
function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}

// abort sets the response code and loads the view
function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.view.php");

    die();
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
routeToController($uri, $routes);
