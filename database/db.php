<?php
// Database connection settings
$host = 'localhost:3306'; 
$dbname = 'holy_spirit_academia_church';
$username = 'gloire';                       
$password = 'Pat102030@@#';

try {
    // Create a PDO instance
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Set error mode to exception for better error handling
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Output connection error message
    echo "Connection failed: " . $e->getMessage();
    $db = null; // Set $db to null if connection fails
}
