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
    "title" => SITE. " | Home" , []
  ]);
  }
}