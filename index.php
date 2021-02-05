<?php

require __DIR__ . "/vendor/autoload.php";
$router = new \CoffeeCode\Router\Router(ROOT);

$router->namespace("Source\Controllers");

$router->get("/", "ServerController:home");

$router->dispatch();
