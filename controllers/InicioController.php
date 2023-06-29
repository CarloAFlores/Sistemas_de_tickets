<?php 
namespace Controllers;

use MVC\Router;


class inicioController{
	
	public static function index(Router $router){
		$router->render('paginas/index');
	}
}