<!-- Implement try-catch blocks in a PHP script to handle exceptions for database connectionandquery execution. -->

<?php

$host = "localhost";   
$dbname = "test_db";   
$username = "root";    
$password = "";        

try {
    // Establish a database connection (PDO)
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo " Database connection successful!<br>";

    //  Prepare a query inside a try-catch block
    try {
        $query = "SELECT * FROM users";  // Assuming 'users' table exists
        $stmt = $pdo->query($query);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Display users
        if ($users) {
            echo "<h3>Users List:</h3>";
            foreach ($users as $user) {
                echo " " . htmlspecialchars($user['username']) . "<br>";
            }
        } else {
            echo "No users found.";
        }
    } catch (PDOException $e) {
        echo " Query execution failed: " . $e->getMessage();
    }

} catch (PDOException $e) {
    //  Handle database connection failure
    die(" Database connection failed: " . $e->getMessage());
}

?>