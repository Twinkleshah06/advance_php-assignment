<?php
session_start(); // Start the session

// Set session variables
$_SESSION["username"] = "JohnDoe";
$_SESSION["email"] = "johndoe@example.com";

// Set a cookie (expires in 1 day)
setcookie("user_preference", "dark_mode", time() + 86400, "/"); 

echo "✅ Session and Cookie have been set. <a href='session_cookie_get.php'>Go to next page</a>";
?>