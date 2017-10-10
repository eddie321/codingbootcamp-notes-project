<?php
// helps define directory framework using constants

// SYSTEM DIRECTORY
// to define constants : define ('name', value)
// using __DIR__ as the basis for system directory (defines root folder @ 'notes_project').
//  __DIR__ . '/..' => folder above current
define('SYSTEM_DIR', __DIR__ . '/..');

//PUBLIC DIRECTORY
// using SYSTEM_DIR as the basis for public directory (defines public folder @ 'public').
define('PUBLIC_DIR', SYSTEM_DIR . '/public');
// --> when we need to find a file, we can now navigate using these constants.

//VENDOR DIRECTORY
define('VENDOR_DIR', SYSTEM_DIR . '/vendor');


//require once all necessary libraries
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/request.php'; // request handling
require_once VENDOR_DIR . '/codingbootcamp/exercises/db.php'; // database
require_once VENDOR_DIR . '/polakjan/tinymvc/config.php'; // configuration
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/helpers.php'; // 

