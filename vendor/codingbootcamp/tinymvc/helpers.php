<?php

// ALIAS FUNCTIONS

// REQUEST / get() FUNCTION
// alias for \codingbootcamp\tinymvc\request::get()
// BUT --> will be freely accessible from anywhere
function request($name, $default = null)
{
    return \codingbootcamp\tinymvc\request::get($name, $default);
}
// ***** the \codingbootcamp\tinymvc\ attribute is here used to reference a specific namespace, and request::get($name, $default) points to the exact function within that namespace which we seek to create an alias for.


// CONFIG FUNCTION
//
function config($key, $default = null)
{
    return \polakjan\tinymvc\config::get($key, $default);
}