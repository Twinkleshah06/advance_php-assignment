<?php

require_once __DIR__ . '/../models/UserModel.php';
require_once __DIR__ . '/../views/userView.php';

class UserController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new UserView();
    }

    public function showUsers() {
        $users = $this->model->getUsers(); // Fetch users
        $this->view->render($users); // Pass data to view
    }
}

?>