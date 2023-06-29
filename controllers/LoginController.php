<?php 
namespace Controllers;

//Se debe importa el router para que se pueda hacer uso de sus funciones
use MVC\Router;


class LoginController{
	
	//En esta parte es donde le decimos a la funcion "render" a que parte de la "view" vamos a ir
	public static function index(Router $router){
		$router->render('login/index');
	}
}