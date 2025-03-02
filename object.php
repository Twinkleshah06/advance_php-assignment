<!-- Instantiate multiple objects of the "Car" class and demonstrate how to access their properties and methods. -->

<?php

class Car {
    // Private properties
    private $make;
    private $model;
    private $year;

    // Constructor to initialize values
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Public method to display car details
    public function displayCarDetails() {
        echo "Car Details: <br>";
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br><br>";
    }
}

// Instantiating multiple car objects
$car1 = new Car("Toyota", "Corolla", 2023);
$car2 = new Car("Honda", "Accord", 2022);
$car3 = new Car("Ford", "Mustang", 2021);

// Accessing the method for each car object
$car1->displayCarDetails();
$car2->displayCarDetails();
$car3->displayCarDetails();