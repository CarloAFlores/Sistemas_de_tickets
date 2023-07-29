<?php 
namespace Controllers;

use MVC\Router;


class inicioController{
	
	public static function index(Router $router){
		session_start();
		$router->render('paginas/index');
	}

	public static function crear(Router $router){
		session_start();
		$router->render('paginas/crear');
	}

	public static function pendientes(Router $router){
		session_start();
		$router->render('paginas/pedientes');
	}

	public static function proceso(Router $router){
		session_start();
		$router->render('paginas/proceso');
	}

	public static function falta_recursos(Router $router){
		session_start();
		$router->render('paginas/falta_recursos');
	}

	public static function terminados(Router $router){
		session_start();
		$router->render('paginas/terminados');
	}

	public static function cancelados(Router $router){
		session_start();
		$router->render('paginas/cancelados');
	}

	public static function estadisticas(Router $router){
		session_start();
		$router->render('paginas/estadisticas');
	}
}