<?php

$url = isset($_GET['url']) ? $_GET['url'] : 'home';

// Példa: URL feldarabolása
$urlParts = explode('/', $url);

// A kérést kezeli a controller és metódus
$controllerName = ucfirst($urlParts[0]) . 'Controller';
$methodName = isset($urlParts[1]) ? $urlParts[1] : 'index';

// Ellenőrzés, hogy a controller és a metódus létezik-e
if (file_exists("controllers/$controllerName.php")) {
    include_once "controllers/$controllerName.php";
    $controller = new $controllerName();

    if (method_exists($controller, $methodName)) {
        // Hívjuk meg a metódust
        $controller->$methodName();
    } else {
        // Kezeljük a hibát, például 404 hibaként
        echo "Error";
    }
} else {
    echo "Error";
}