<?php

namespace codingbootcamp\tinymvc;

class request
{
    // get information from request, or return a default value
    public static function get($name, $default = null)
    // name will have no default value and must be defined when function called, and $default will have a default value set to NULL
    {
        // if is set something with the index name, otherwise return the default variable
        if(isset($_REQUEST[$name]))
        {
            return $_REQUEST[$name];
        }
        else
        {
            return $default;
        }
    }
}