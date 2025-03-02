<!-- Create a class with static properties and methods, and demonstrate their access using thescope resolution operator. -->

<?php

class MathHelper {
    // Static property
    public static $pi = 3.14159;

    // Static method
    public static function square($number) {
        return $number * $number;
    }
}

// Accessing static property and method using scope resolution operator (::)
echo "Value of Pi: " . MathHelper::$pi . "<br>"; // Access static property
echo "Square of 5: " . MathHelper::square(5) . "<br>"; // Call static method

?>