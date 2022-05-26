<?php
header("Content-Type: text/html; charset=utf-8");
require_once "../config/config.php";
require_once "../src/vendor/autoload.php";



use App\Core\App;
use App\Http\Controller\ViewController;
use App\Http\Controller\AuthController;


$app = new App();

$app->router->get("/",        [ ViewController::class, 'home'    ]);
$app->router->get("/privacy", [ ViewController::class, 'privacy' ]);
$app->router->get("/contact", [ ViewController::class, 'contact' ]);
$app->router->get("/about",   [ ViewController::class, 'about'   ]);

$app->run();
