<?php

// dd dumps the passed value and ends the script
function dd($value)
{
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}

// urlIs checks if the current url is the same as the one passed in
function urlIs($url)
{
    return $_SERVER['REQUEST_URI'] === $url;
}
