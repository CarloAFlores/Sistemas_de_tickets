<?php 
namespace Controllers;

use MVC\Router;
use Model\Tickets;
use Model\Login;


class inicioController{
	
	public static function index(Router $router){
		session_start();

		$tickets = Tickets::final();
		$login = Login::all();
		$router->render('paginas/index',[
			'tickets' => $tickets,
			'login' => $login
		]);
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
		$id = $_GET['id'];
		
		$val = Tickets::busqueda($id);
		$router->render('paginas/proceso',[
			'val' => $val
		]);
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

		$tickets = Tickets::final();

		$router->render('paginas/cancelados',[
			'tickets' => $tickets
		]);
	}

	public static function estadisticas(Router $router){
		session_start();
		$router->render('paginas/estadisticas');
	}

	public static function eliminar(){

		$datos = json_decode(file_get_contents('php://input'));

		$tickets = Tickets::busqueda($datos->{'a'});

		echo json_encode($tickets);

	}
}