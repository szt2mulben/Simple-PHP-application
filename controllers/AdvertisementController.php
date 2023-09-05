<?php
class AdvertisementController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function advertisementList() {
        $advertisementModel = new AdvertisementModel($this->pdo);
        $advertisements = $advertisementModel->getAdvertisementsWithUsers(); 
        include 'views/advertisement-list.php';
    }
}