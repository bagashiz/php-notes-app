<?php

namespace Core;

// Container class to bind and resolve dependencies
class Container
{
    protected $bindings = [];

    // bind binds a key to a function
    public function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }

    // resolve resolves a key to a function
    public function resolve($key)
    {
        if (!array_key_exists($key, $this->bindings)) {
            throw new \Exception("No matching binding found for key {$key}");
        }

        $resolver = $this->bindings[$key];

        return call_user_func($resolver);
    }
}
