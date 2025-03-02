<!-- Create a simple class in PHP that demonstrates encapsulation by using private and public properties and methods. -->

<?php

class User {
    // Private properties (Encapsulation: Only accessible within the class)
    private $name;
    private $email;

    // Constructor to initialize values
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    // Public method to set the name (Allows controlled access)
    public function setName($name) {
        if (!empty($name)) {
            $this->name = $name;
        } else {
            echo "Name cannot be empty!";
        }
    }

    // Public method to get the name (Encapsulation: Controlled access to private property)
    public function getName() {
        return $this->name;
    }

    // Public method to set the email
    public function setEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            echo "Invalid email format!";
        }
    }

    // Public method to get the email
    public function getEmail() {
        return $this->email;
    }

    // Private method (Cannot be accessed directly outside the class)
    private function formatEmail() {
        return strtolower($this->email);
    }

    // Public method to display user info
    public function displayUserInfo() {
        echo "User: " . $this->getName() . "<br>";
        echo "Email: " . $this->formatEmail() . "<br>";
    }
}

// Creating an object of the User class
$user = new User("John Doe", "John@example.com");

// Accessing data using public methods
$user->setName("Jane Doe");
$user->setEmail("jane.doe@example.com");

// Display user info
$user->displayUserInfo();

?>
