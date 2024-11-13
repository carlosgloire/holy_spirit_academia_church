<?php

$host = "localhost:3306"; 
$dbname = "holy_spirit_academia_church"; 
$username = "gloire";                     
$password = "Pat102030@@#";                 

$mysqli = new mysqli(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname
);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
