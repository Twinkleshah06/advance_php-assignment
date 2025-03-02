<!-- Write a PHP script to create a class representing a "Car" with properties like make, model, and year, and a method to display the car details -->


<?php

class Car {
    // Properties
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
        echo "Year: " . $this->year . "<br>";
    }
}

// Creating an object of the Car class
$car1 = new Car("Toyota", "Camry", 2022);
$car2 = new Car("Honda", "Civic", 2021);

// Displaying car details
$car1->displayCarDetails();
echo "<br>"; // Line break
$car2->displayCarDetails();

?>