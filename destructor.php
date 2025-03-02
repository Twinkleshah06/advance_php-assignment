<!-- Write a class that implements a destructor to perform cleanup tasks when an object is destroyed. -->

<?php

class FileHandler {
    private $file;

    // Constructor - Opens a file when an object is created
    public function __construct($filename) {
        $this->file = fopen($filename, "w");
        echo "File '$filename' opened successfully.<br>";
    }

    // Method to write data to the file
    public function writeData($data) {
        if ($this->file) {
            fwrite($this->file, $data . "\n");
            echo "Data written to file.<br>";
        }
    }

    // Destructor - Closes the file when the object is destroyed
    public function __destruct() {
        if ($this->file) {
            fclose($this->file);
            echo "File closed successfully.<br>";
        }
    }
}

// Creating an object of FileHandler
$fileHandler = new FileHandler("example.txt");

// Writing some data
$fileHandler->writeData("Hello, World!");

// The destructor is called automatically when the script ends or the object is unset
?>