<!-- Create a class marked as final and attempt to extend it to show the restriction -->

<?php

class BaseClass {
    // Final method - cannot be overridden
    final public function showMessage() {
        echo "This method is final and cannot be overridden.<br>";
    }
}

// Child class can extend BaseClass but cannot override showMessage()
class ChildClass extends BaseClass {
    // public function showMessage() { // This will cause an error
    //     echo "Trying to override a final method.";
    // }
    
    public function newMethod() {
        echo "This is a new method in the child class.<br>";
    }
}

// Creating an object
$child = new ChildClass();
$child->showMessage(); // Allowed (inherited from BaseClass)
$child->newMethod(); // Allowed (defined in ChildClass)

?>