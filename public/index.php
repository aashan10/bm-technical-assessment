<?php

require_once __DIR__ . '/../vendor/autoload.php';

$pathinfo = $_SERVER['PATH_INFO'] ?? '/';
$method = strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');

$routes = require_once __DIR__ . '/../routes.php';

if (!isset($routes[$method][$pathinfo])) {
    header('HTTP/1.1 404 Not Found');
    echo '404';
    exit;
}

$controller = $routes[$method][$pathinfo];
$controller = explode('@', $controller);
$controllerName = $controller[0];
$methodName = $controller[1];

$controller = new $controllerName;
$controller->$methodName();