<!-- Create a class with a constructor that initializes properties when an object is created -->

<?php

class Person {
    // Properties
    private $name;
    private $age;

    // Constructor to initialize properties
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Method to display person details
    public function displayPersonInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br><br>";
    }
}

// Creating objects with constructor initialization
$person1 = new Person("Alice", 25);
$person2 = new Person("Bob", 30);

// Displaying person details
$person1->displayPersonInfo();
$person2->displayPersonInfo();

?>