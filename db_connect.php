<!-- Write a script to establish a database connection and handle any errors during the connection process. -->

<?php

$host = "localhost";    // Database host
$dbname = "test_db";    // Database name
$username = "root";     // Database username
$password = "";         // Database password (empty for XAMPP)

try {
    // Create a new PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo " Database connection successful!";
} catch (PDOException $e) {
    // Handle connection error
    echo " Database connection failed: " . $e->getMessage();
    exit(); // Stop further execution if the connection fails
}

?>
