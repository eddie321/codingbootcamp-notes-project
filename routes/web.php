<?php
//This will be the list of our routes
//these routes will be for web access via the browser for the common user

$routes = [

    'homepage' => [
        'controller' => 'indexController',
        'action' => 'index'
    ]


    'list' => [
    'controller' => 'notesController',
    'action' => 'listing'
    ]
];