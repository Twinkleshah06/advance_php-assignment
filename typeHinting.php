<!-- Write a method in a class that accepts type-hinted parameters and demonstrate howit works with different data types. -->

<?php

class TypeHintExample {
    // Method with type-hinted parameters
    public function processData(string $name, int $age, float $height, array $skills) {
        echo "Name: $name<br>";
        echo "Age: $age<br>";
        echo "Height: $height meters<br>";
        echo "Skills: " . implode(", ", $skills) . "<br>";
    }
}

// Creating an object
$obj = new TypeHintExample();

// Calling the method with correct data types
$obj->processData("Alice", 25, 5.6, ["PHP", "Laravel", "JavaScript"]);

// Uncommenting below lines will cause errors due to incorrect types
// $obj->processData(123, "25", "5.6", "PHP"); //  TypeError

?>