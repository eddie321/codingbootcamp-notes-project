<?php

// ALIAS FUNCTION
// alias for \codingbootcamp\tinymvc\request::get()
// BUT --> will be freely accessible from anywhere
function request($name, $method = null)
{
    return \codingbootcamp\tinymvc\request::get($name, $default);
}
