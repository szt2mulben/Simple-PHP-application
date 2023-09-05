<?php
require_once 'config.php';

$page = $_GET['page'] ?? 'index';

switch ($page) {
    case 'user-list':
        $userController = new UserController($pdo);
        $userController->userList();
        break;
    case 'advertisement-list':
        $advertisementController = new AdvertisementController($pdo);
        $advertisementController->advertisementList();
        break;
    default:
        include 'views/index.php';
        break;
}
?>
