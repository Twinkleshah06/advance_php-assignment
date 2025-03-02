<!-- Create a "Vehicle" class and extend it with a "Car" class. Include properties and methods inboth classes, demonstrating inherited behavior. -->

<?php

// Base class (Parent class)
class Vehicle {
    // Protected properties (accessible in child classes)
    protected $make;
    protected $model;
    protected $year;

    // Constructor to initialize vehicle details
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to display vehicle details
    public function displayDetails() {
        echo "Vehicle Details: <br>";
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}

// Derived class (Child class)
class Car extends Vehicle {
    // Additional property specific to Car
    private $fuelType;

    // Constructor to initialize car details, including parent properties
    public function __construct($make, $model, $year, $fuelType) {
        // Call parent constructor
        parent::__construct($make, $model, $year);
        $this->fuelType = $fuelType;
    }

    // Method to display car details (overriding parent method)
    public function displayDetails() {
        parent::displayDetails(); // Call parent method
        echo "Fuel Type: " . $this->fuelType . "<br><br>";
    }
}

// Creating objects of the Car class
$car1 = new Car("Toyota", "Corolla", 2023, "Petrol");
$car2 = new Car("Tesla", "Model S", 2022, "Electric");

// Displaying car details
$car1->displayDetails();
$car2->displayDetails();

?>