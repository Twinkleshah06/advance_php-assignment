<?php

class LibraryItem {
    protected $title;
    protected $author;
    protected $year;

    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    public function getDetails() {
        return "{$this->title} by {$this->author} ({$this->year})";
    }
}

?>