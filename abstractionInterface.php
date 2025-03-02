<!-- Define an interface named VehicleInterface with methods like start(), stop(), andimplement this interface in multiple classes -->

<?php

// Defining an interface
interface VehicleInterface {
    public function start();
    public function stop();
}

// Implementing the interface in a Car class
class Car implements VehicleInterface {
    public function start() {
        echo "Car is starting... <br>";
    }

    public function stop() {
        echo "Car has stopped. <br>";
    }
}

// Implementing the interface in a Bike class
class Bike implements VehicleInterface {
    public function start() {
        echo "Bike is starting... <br>";
    }

    public function stop() {
        echo "Bike has stopped. <br>";
    }
}

// Implementing the interface in a Truck class
class Truck implements VehicleInterface {
    public function start() {
        echo "Truck is starting... <br>";
    }

    public function stop() {
        echo "Truck has stopped. <br>";
    }
}

// Creating objects and calling methods
$car = new Car();
$bike = new Bike();
$truck = new Truck();

$car->start();
$car->stop();

$bike->start();
$bike->stop();

$truck->start();
$truck->stop();

?>