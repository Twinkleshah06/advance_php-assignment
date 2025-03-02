<!-- Create a simple MVC application that demonstrates the separation of concerns by implementing a basic "User" module with a model, view, and controller. -->

<?php

require_once __DIR__ . '/controllers/UserController.php';

// Create an instance of the controller
$controller = new UserController();
$controller->showUsers(); // Display user data

?>