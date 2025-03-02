<?php

class UserModel {
    private $users = [
        ["id" => 1, "name" => "Alice", "email" => "alice@example.com"],
        ["id" => 2, "name" => "Bob", "email" => "bob@example.com"]
    ];

    public function getUsers() {
        return $this->users; // Return user list
    }
}

?>