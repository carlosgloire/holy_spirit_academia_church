<?php

$host = "holy_spirit_academia_church_hsac"; // Internal Host from your credentials
$dbname = "holy_spirit_academia_church";    // Database Name
$username = "mysql";                        // User
$password = "hsac@_230";                    // Password

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
