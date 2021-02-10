<?php
namespace Source\Controllers;
use League\Plates\Engine;


class ServerController{
    private $view;

	public function __construct($router)
	{
		$this->view = new Engine(__DIR__ ."/../public/pages", "php");
		$this->view->addData(["router" => $router]);

  }
  

  public function home():void
  {
    echo $this->view->render("home", [
    "title" => SITE. " | Inicio" , []
    ]);
  }
  //efetuar compra
  public function effectPurchase():void
  {
    echo $this->view->render("effect-purchase", [
    "title" => SITE. " | Efetuar Compra" , []
    ]);
  }
  
  public function redefinePassword():void
  {
    echo $this->view->render("redefine-password", [
    "title" => SITE. " | Redefinir Senha" , []
    ]);
  }
  
  public function shoppingCart():void
  {
      echo $this->view->render("shopping-cart", [
    "title" => SITE. " | Carrinho" , []
  ]);
  }

  public function specificProduct($idProduct):void
  {
      echo $this->view->render("product-specific", [
    "title" => SITE. " | Produto" , []
  ]);
  }
}