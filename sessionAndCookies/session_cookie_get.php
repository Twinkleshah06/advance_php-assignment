<?php
session_start(); // Start the session again

echo "<h3>🔹 Retrieving Session Data</h3>";

if(isset($_SESSION["username"]) && isset($_SESSION["email"])) {
    echo " Username: " . $_SESSION["username"] . "<br>";
    echo " Email: " . $_SESSION["email"] . "<br>";
} else {
    echo " No session data found!";
}

echo "<h3> Retrieving Cookie Data</h3>";

if(isset($_COOKIE["user_preference"])) {
    echo " User Preference: " . $_COOKIE["user_preference"];
} else {
    echo " No cookie found!";
}
?>