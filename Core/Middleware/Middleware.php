<?php

namespace Core\Middleware;

// Middleware is a class that handles middlewares
class Middleware
{
    // MAP is a mapper from only() method to corresponding middleware
    public const MAP = [
        'guest' => Guest::class,
        'auth' => Auth::class,
        // add more middlewares here
    ];

    // resolve resolves the middleware
    public static function resolve($key)
    {
        if (!$key) {
            return;
        }

        $middleware = static::MAP[$key] ?? false;

        if (!$middleware) {
            throw new \Exception("No matching middleware found for '{$key}'.");
        }

        (new $middleware)->handle();
    }
}
