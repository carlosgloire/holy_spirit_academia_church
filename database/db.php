<?php
try {
    $db = new PDO("mysql:host=82.112.225.123;port=3306;dbname=holy_spirit_academia_church", "mysql", "hsac@_230", 
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    error_log("Database connection error: " . $e->getMessage(), 3, "/app/error_log.txt");
    echo 'Connection failed: Check error log for details';
}
?>
