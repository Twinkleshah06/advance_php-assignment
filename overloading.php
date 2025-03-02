<!-- Create a class that demonstrates method overloading by defining multiple methods withthesame name but different parameters. -->

<?php

class Calculator {
    // Method overloading using __call()
    public function __call($name, $arguments) {
        if ($name == 'add') {
            $count = count($arguments);
            
            if ($count == 2) {
                return $arguments[0] + $arguments[1]; // Add two numbers
            } elseif ($count == 3) {
                return $arguments[0] + $arguments[1] + $arguments[2]; // Add three numbers
            } else {
                return "Invalid number of arguments!";
            }
        }
    }
}

// Creating an object of the Calculator class
$calc = new Calculator();

// Calling the "add" method with different arguments
echo "Sum of 5 and 10: " . $calc->add(5, 10) . "<br>"; // 15
echo "Sum of 3, 7, and 2: " . $calc->add(3, 7, 2) . "<br>"; // 12
echo "Invalid Call: " . $calc->add(1) . "<br>"; // Invalid number of arguments!

?>