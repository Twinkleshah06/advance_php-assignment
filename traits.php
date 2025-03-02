<!-- Create two traits and use them in a class to demonstrate how to include multiple behaviors -->

<?php

// Defining the first trait
trait Logger {
    public function log($message) {
        echo "[LOG]: " . $message . "<br>";
    }
}

// Defining the second trait
trait Notifier {
    public function notify($user, $message) {
        echo "Notifying $user: $message <br>";
    }
}

// Using both traits in a class
class User {
    use Logger, Notifier;

    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function sendMessage($message) {
        $this->log("Sending message to $this->name");
        $this->notify($this->name, $message);
    }
}

// Creating an object and using trait methods
$user = new User("Alice");
$user->sendMessage("Hello, Alice!");

?>