<!-- Create a class that uses magic methods to handle property access and modification dynamically. -->

<?php

class DynamicProperties {
    // Private array to store property values
    private $data = [];

    // Magic method to handle getting properties
    public function __get($name) {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        } else {
            return "Property '$name' does not exist.<br>";
        }
    }

    // Magic method to handle setting properties
    public function __set($name, $value) {
        echo "Setting '$name' to '$value'.<br>";
        $this->data[$name] = $value;
    }

    // Magic method to check if a property is set
    public function __isset($name) {
        return isset($this->data[$name]);
    }

    // Magic method to unset a property
    public function __unset($name) {
        if (isset($this->data[$name])) {
            echo "Unsetting '$name'.<br>";
            unset($this->data[$name]);
        } else {
            echo "Property '$name' is not set.<br>";
        }
    }
}

// Creating an object
$obj = new DynamicProperties();

// Setting properties dynamically
$obj->name = "John";
$obj->age = 30;

// Getting properties dynamically
echo "Name: " . $obj->name . "<br>"; // John
echo "Age: " . $obj->age . "<br>"; // 30
echo "City: " . $obj->city . "<br>"; // Property 'city' does not exist

// Checking if a property is set
echo isset($obj->age) ? "Age is set.<br>" : "Age is not set.<br>";

// Unsetting a property
unset($obj->age);
echo isset($obj->age) ? "Age is set.<br>" : "Age is not set.<br>";

?>