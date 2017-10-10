<?php

//include bootstrapping
include '../bootstrap/bootstrap.php';

var_dump('PUBLIC_DIR');

// call static function get($name, $default = null)
// get() function exists in a different name space, so will not work unless it is called via exact pathway.

$route = request('route', 404);
echo $route;

//IF NOT GLOBAL FUNCTION, BUT SPECIFIC NAMESPACE FUNCTION... 
// $route = \codingbootcamp\tinymvc\request::get('route', 404);
// use \codingbootcamp\tinymvc\request as request;
// echo $route;



