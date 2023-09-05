<?php 

class UserController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function userList() {
        $userModel = new UserModel($this->pdo);
        $users = $userModel->getUsers();
        include 'views/user-list.php';
    }
}
