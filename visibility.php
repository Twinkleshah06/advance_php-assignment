<!-- Write a class that shows examples of each visibility type and how they restrict access toproperties and methods. -->

<?php

class VisibilityExample {
    // Public property - Can be accessed anywhere
    public $publicVar = "I am public";

    // Protected property - Can be accessed within this class and subclasses
    protected $protectedVar = "I am protected";

    // Private property - Can only be accessed within this class
    private $privateVar = "I am private";

    // Public method
    public function showPublic() {
        echo "Public Method: " . $this->publicVar . "<br>";
    }

    // Protected method
    protected function showProtected() {
        echo "Protected Method: " . $this->protectedVar . "<br>";
    }

    // Private method
    private function showPrivate() {
        echo "Private Method: " . $this->privateVar . "<br>";
    }

    // Method to access all visibility types from within the class
    public function showAll() {
        echo $this->publicVar . "<br>";
        echo $this->protectedVar . "<br>";
        echo $this->privateVar . "<br>";
        
        $this->showPublic();
        $this->showProtected();
        $this->showPrivate();
    }
}

// Child class to test inheritance behavior
class ChildClass extends VisibilityExample {
    public function accessParentProperties() {
        echo "From Child Class: " . $this->publicVar . "<br>";  //  Allowed
        echo "From Child Class: " . $this->protectedVar . "<br>"; //  Allowed (protected)
        
        //  Private property cannot be accessed from child class
        // echo "From Child Class: " . $this->privateVar . "<br>"; //  Error

        $this->showPublic(); //  Allowed
        $this->showProtected(); //  Allowed
        // $this->showPrivate(); //  Error (private method)
    }
}

// Creating an object
$obj = new VisibilityExample();

echo "<strong>Accessing from Outside the Class:</strong><br>";
echo $obj->publicVar . "<br>"; //  Allowed
// echo $obj->protectedVar . "<br>"; //  Error
// echo $obj->privateVar . "<br>"; //  Error

$obj->showPublic(); //  Allowed
// $obj->showProtected(); //  Error
// $obj->showPrivate(); //  Error

echo "<br><strong>Accessing from Within the Class:</strong><br>";
$obj->showAll(); //  All properties and methods accessible

echo "<br><strong>Accessing from a Child Class:</strong><br>";
$child = new ChildClass();
$child->accessParentProperties(); // Public & protected properties/methods are accessible

?>
