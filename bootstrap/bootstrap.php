<?php
// helps define directory framework using constants

// SYSTEM DIRECTORY
// to define constants : define ('name', value)
// using __DIR__ as the basis for system directory (defines root folder @ 'notes_project').
//  __DIR__ . '/..' => folder above current
define('SYSTEM_DIR', __DIR__ . '/..');

// APPLICATION DIRECTORY
define('APP_DIR', SYSTEM_DIR . '/app'); 

//PUBLIC DIRECTORY
// using SYSTEM_DIR as the basis for public directory (defines public folder @ 'public').
define('PUBLIC_DIR', SYSTEM_DIR . '/public');

// ROUTE DEFINITIONS DIRECTORY
define('ROUTES_DIR', SYSTEM_DIR . '/routes');

//VENDOR DIRECTORY
define('VENDOR_DIR', SYSTEM_DIR . '/vendor');

// --> when we need to find a file, we can now navigate using these constants.


//require once all necessary libraries
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/request.php'; // request handling
require_once VENDOR_DIR . '/codingbootcamp/exercises/db.php'; // database
require_once VENDOR_DIR . '/polakjan/tinymvc/config.php'; // configuration
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/helpers.php'; // helper functions

