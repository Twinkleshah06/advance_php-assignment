<!-- Develop a mini project (e.g., a Library Management System) that utilizes all OOP concepts like classes, inheritance, interfaces, magic methods, etc. -->

<?php

require_once 'classes/Library.php';

// Create Library Instance
$library = new Library();

// Add Books
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925);
$book2 = new Book("1984", "George Orwell", 1949);
$book3 = new Book("To Kill a Mockingbird", "Harper Lee", 1960);

$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

// List all books
echo "<h2>Library Books:</h2>";
$library->listBooks();

// Borrow & Return Books
echo "<br>" . $book1->borrowItem();
echo "<br>" . $book1->borrowItem(); // Already borrowed
echo "<br>" . $book1->returnItem();
echo "<br>" . $book1->returnItem(); // Not borrowed

// Display total books
echo "<br><br>Total Books in Library: " . Book::getTotalBooks();

?>