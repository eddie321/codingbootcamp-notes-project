<?php

// Fully Qualified Name (FQN) of this class is now codingbootcamp\exercises
namespace codingbootcamp\exercises;

class db_connect{
    // database connection information
    //(modify as needed for every project)
    protected static $host = 'localhost';
    protected static $username = 'root';
    protected static $password = 'Mundiwa1995';
    protected static $database = 'notes_project';
}

function db_connect()
{
    require_once 'config.php';
    $db = new PDO("mysql:host=localhost;dbname=$db_name;charset=utf8",  $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//enabling errors just for our case
    return $db;
}
?>