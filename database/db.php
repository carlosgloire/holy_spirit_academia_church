<?php
// Database connection settings
$host = 'holy_spirit_academia_church_hsac'; // Internal Host from your credentials
$dbname = 'holy_spirit_academia_church';    // Database Name
$username = 'mysql';                        // User
$password = 'hsac@_230';                    // Password

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
