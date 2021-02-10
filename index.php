<?php

require __DIR__ . "/vendor/autoload.php";
$router = new \CoffeeCode\Router\Router(ROOT);

$router->namespace("Source\Controllers");

$router->get("/", "ServerController:home");
$router->get("/produto/{idProduct}", "ServerController:specificProduct");
$router->get("/carrinho", "ServerController:shoppingCart");
$router->get("/efetuar-compra", "ServerController:effectPurchase");
$router->get("/redefinir-senha", "ServerController:redefinePassword");



$router->dispatch();
