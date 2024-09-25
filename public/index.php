<?php

<<<<<<< HEAD
include '../vendor/autoload.php';

$routes = include '../config/routes.php';

use App\Controller\PageErrorController;

$url = $_SERVER['REQUEST_URI'];

if (false === isset($routes[$url])) {
    (new PageErrorController())->notFound();
    exit;
}

$controller = $routes[$url][0];
$method = $routes[$url][1];

(new $controller())->$method();
=======
include '../config/routes.php';

echo "PHP OO";
>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb
