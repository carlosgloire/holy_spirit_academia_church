<?php
try {
    $db = new PDO("mysql:host=82.112.225.123;port=3306;dbname=holy_spirit_academia_church", "mysql", "hsac@_230", 
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    // Attempt to write to a temporary error log if permission issues persist
    error_log("Database connection error: " . $e->getMessage(), 3, "/tmp/error_log.txt");
    echo 'Connection failed: Check error log for details';
    // Optional: set $db to null if connection fails
    $db = null;
}
?>
