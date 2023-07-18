<?php 
namespace Controllers;

use MVC\Router;


class inicioController{
	
	public static function index(Router $router){
		session_start();
		$router->render('paginas/index');
	}
}