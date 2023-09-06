<?php 
namespace Controllers;

use MVC\Router;
use Model\Tickets;
use Model\Login;
use Model\Usuarios;


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
		
		$usuarios = Usuarios::ObtenerUsuariosDeLaBaseDeDatos();

		$router->render('paginas/crear',[
			'usuarios' => $usuarios
		]);
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

		$datos = $_POST['id'];
		$val = Tickets::borrar($datos);
		$val2 = Tickets::final();
		
		echo json_encode($val2);

	}


public static function mirar(){

		$datos = $_POST['nombre'];
		$nombre = Usuarios::seleccionar($datos);

		echo json_encode($nombre);

}



	public static function insertar(){
		
		$etiqueta = $_POST['etiqueta'];
		$asunto = $_POST['asunto'];
		$descripcion = $_POST['motivo'];
		$fecha = $_POST['fecha'];
		$hora = $_POST['hora'];
	
		$nomina = $_POST['nomina'];

		

		$val2 = Tickets::insertar($etiqueta, $asunto, $descripcion, $hora, $fecha);
		header("Location: inicio");


	}


}