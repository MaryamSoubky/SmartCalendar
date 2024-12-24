<?php

require_once(__ROOT__ . "controller/Controller.php");

class UsersController extends Controller {
    public function insert() {
        $name = $_REQUEST['name']; // Fetch name from request
        $email = $_REQUEST['email']; // Fetch password from request
        $password = $_REQUEST['password']; // Fetch password from request

        $this->model->insertUser($name, $email, $password); // Call model's insert method
    }

    public function edit() {
        $id = $_REQUEST['id']; // Fetch user ID from request
        $name = $_REQUEST['name']; // Fetch name from request
        $email = $_REQUEST['email']; // Fetch password from request
        $password = $_REQUEST['password']; // Fetch password from request

        $this->model->editUser($id, $name, $email, $password); // Call model's edit method
    }

    public function delete() {
        $id = $_REQUEST['id']; // Fetch user ID from request

        $this->model->deleteUser($id); // Call model's delete method
    }
}
