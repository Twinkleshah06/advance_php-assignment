<?php

require_once 'LibraryItem.php';
require_once 'Borrowable.php';

class Book extends LibraryItem implements Borrowable {
    private $isBorrowed = false;
    private static $totalBooks = 0; // Static property to track book count

    public function __construct($title, $author, $year) {
        parent::__construct($title, $author, $year);
        self::$totalBooks++; // Increment total book count
    }

    public function borrowItem() {
        if ($this->isBorrowed) {
            return "{$this->title} is already borrowed.";
        }
        $this->isBorrowed = true;
        return "{$this->title} has been borrowed.";
    }

    public function returnItem() {
        if (!$this->isBorrowed) {
            return "{$this->title} was not borrowed.";
        }
        $this->isBorrowed = false;
        return "{$this->title} has been returned.";
    }

    public function __toString() {
        return $this->getDetails() . " - " . ($this->isBorrowed ? "Borrowed" : "Available");
    }

    public static function getTotalBooks() {
        return self::$totalBooks; // Access static property
    }
}

?>