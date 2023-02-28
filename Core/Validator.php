<?php

namespace Core;

// Validator class to handle controller validation
class Validator
{
    // validate validates the request
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    // email validates the given email
    public static function email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
