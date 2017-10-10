<?php

//include bootstrapping
include '../bootstrap/bootstrap.php';


//var_dump('PUBLIC_DIR');


// call static function get($name, $default = null)
// get() function exists in a different name space, so will not work unless it is called via exact pathway OR if function is made global (which i have done in 'helpers.php'.
$route = request('route', 404);
//echo $route;

//IF NOT GLOBAL FUNCTION, BUT SPECIFIC NAMESPACE FUNCTION... 
// $route = \codingbootcamp\tinymvc\request::get('route', 404);
// use \codingbootcamp\tinymvc\request as request;
// echo $route;


// ================================
// this function will have a look at the request and return the name of the controller and name of the action that should handle this request
function getControllerActionFromRequest()
{
    // declare $routes as an empty array
    $routes = [];

    //replace $routes with the variable defined in web.php
    include ROUTES_DIR . '/web.php';

    //get the current route from the request, and return the homepage route if it is not set
    $current_route = request('route', 'homepage');

    // there is an item in $routes with $current_route for index
    if (isset($routes[$current_route]))
    {
        return $routes[$current_route];
    }
    else 
    {
        // return the error 404 controller and action
        return [
            'controller' => 'errorController',
            'action' => 'error404'
        ];
    }
}

function runControllerMethod($controller_name, $action_name)
{
    // include the index controller (just for testing)
    include APP_DIR . '/controllers/' . $controller_name . '.php';

    // create the controller object
    $controller_class = '\\app\\controllers\\' . $controller_name;
    $controller = new $controller_class();

    //call the RIGHT action of the controller object
    echo $controller->$action_name();

}

// contains array held by $routes in web.php (accessed via the 'include' parameter within the function)
// we get the array with the a=name of the controller and its action from request
$controller_action = getControllerActionFromRequest();

// we run the right controller and its action
runControllerMethod($controller_action['controller'], $controller_action['action']);

