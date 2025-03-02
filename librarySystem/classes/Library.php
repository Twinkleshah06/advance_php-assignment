<?php

require_once 'Book.php';

class Library {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function listBooks() {
        foreach ($this->books as $book) {
            echo $book . "<br>";
        }
    }
}

?>