<?php
class AdvertisementController {
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function advertisementList() {
       
        $query = "SELECT a.id, a.title, u.name AS username 
                  FROM advertisements AS a
                  INNER JOIN users AS u ON a.userid = u.id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $advertisements = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include 'views/advertisement-list.php';
    }
}