<?php
require_once "models/User.php";

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    // Display all users
    public function index() {
        $users = $this->userModel->getAllUsers();
        include "views/users/index.php";
    }

    // Create user
    public function create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->userModel->createUser($_POST["name"], $_POST["email"]);
            header("Location: index.php");
        } else {
            include "views/users/create.php";
        }
    }

    // Edit user
    public function edit($id) {
        $user = $this->userModel->getUserById($id);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->userModel->updateUser($id, $_POST["name"], $_POST["email"]);
            header("Location: index.php");
        } else {
            include "views/users/edit.php";
        }
    }

    // Delete user
    public function delete($id) {
        $this->userModel->deleteUser($id);
        header("Location: index.php");
    }
}
?>