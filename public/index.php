<?php 

namespace Sonic\Controllers;

use AltoRouter;


require_once __DIR__.'/../vendor/autoload.php';


$pageToDisplay = $_GET['_url'] ?? '/';

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);


$router->map(
    'GET',
    '/',

    [
        'controller' => 'MainController',
        'method' => 'homepage'
    ],
    'homepage'
);

$router->map(
    'GET',
    '/',

    [
        'controller' => 'MainController',
        'method' => 'createurpage'
    ],
    'createurpage'
);



$match = $router->match();

if($match != false){

    $currentRoute = $match['target'];
    
    $controllerToUse = $currentRoute['controller'];

    $methodToUse = $currentRoute['method'];


    $controllerToUse = "Sonic\Controllers\\" . $controllerToUse;
    
    $controller = new $controllerToUse;

    $controller->$methodToUse($match['params']);


} else {
    $controller = new Sonic\Controllers\ErrorController;
    $controller->error404();
}