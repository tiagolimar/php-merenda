<?php

$routes = include '../config/routes.php';

include '../src/Controller/PageErrorController.php';

use App\Controller\PageErrorController;

$url = $_SERVER['REQUEST_URI'];

if (false === isset($routes[$url])) {
    (new PageErrorController())->notFound();
    exit;
}

$controller = $routes[$url][0];
$method = $routes[$url][1];

(new $controller())->$method();