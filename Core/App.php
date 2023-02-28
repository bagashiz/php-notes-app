<?php

namespace Core;

// App wraps the container and provides a few helper methods
class App
{
    protected static $container;

    // setContainer sets the container for the app
    public static function setContainer($container)
    {
        static::$container = $container;
    }

    // getContainer returns the container for the app
    public static function getContainer()
    {
        return static::$container;
    }

    // bind wraps the container's bind method
    public static function bind($key, $resolver)
    {
        return static::$container->bind($key, $resolver);
    }

    // resolve wraps the container's resolve method
    public static function resolve($key)
    {
        return static::$container->resolve($key);
    }
}
