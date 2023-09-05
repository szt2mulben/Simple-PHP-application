<?php 

class UserController {
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function userList() {
     
        $query = "SELECT id, name FROM users";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include 'views/user-list.php';
    }
}
