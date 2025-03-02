<?php

class UserView {
    public function render($users) {
        echo "<h2>User List</h2>";
        echo "<ul>";
        foreach ($users as $user) {
            echo "<li>{$user['name']} - {$user['email']}</li>";
        }
        echo "</ul>";
    }
}

?>