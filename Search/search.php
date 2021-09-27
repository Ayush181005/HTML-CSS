<?php

error_reporting(E_ALL);

// We can't search without a search parameter
if(!isset($_GET["q"]) or strlen($_GET["q"]) < 3){
    http_response_code(400);
    die();
}

header("Content-Type: application/json");

// Artificial delay
sleep(1);

// Initialise DB connection
$dp_conn = new PDO("mysql:dbname=dcode;host=127.0.0.1", "root", "");
$query = "
    SELECT p.id
        ,p.firstname
        ,p.lastname
        ,p.occupation
    
"