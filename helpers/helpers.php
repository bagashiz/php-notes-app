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

// authorize checks if the passed condition value is true,
// if it is not, it aborts the script with a given status code
function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}
