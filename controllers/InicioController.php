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

    $identificador = $_SESSION['identificador'];

    $tickets = Tickets::final1($identificador); // Pasa el argumento $identificador aquí

    $router->render('paginas/cancelados', [
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

	public static function actualizar() {
    $data = json_decode(file_get_contents('php://input'));

    // Acceder a las propiedades del objeto
    $proceso = $data->proceso;
    $otroValor = $data->otroValor;

    $val = Tickets::actualizarestado($proceso, $otroValor);
    $val2 = Tickets::final();

    // En tu controlador PHP, asegúrate de devolver una respuesta JSON válida
    if (is_array($val2)) {
        echo json_encode($val2);
    } else {
        // Maneja el caso en el que $val2 no es un arreglo
        echo json_encode([]);
    }

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
    $crea = intval($_POST['nomina']);

    $id_responsable = $_POST['id_usuariores'];
    $id_corresponsable = $_POST['id_todosUserCorrespon'];

    //var_dump($crea);
    //exit();
    
    // Procesa el archivo adjunto
    $nombre_archivo = $_FILES['archivo_adjunto']['name'];
    $tipo_archivo = $_FILES['archivo_adjunto']['type'];
    $tamaño_archivo = $_FILES['archivo_adjunto']['size'];
    $temp_archivo = $_FILES['archivo_adjunto']['tmp_name'];
    
    // Asegúrate de que el archivo se haya cargado correctamente
    if (!empty($nombre_archivo)) {
        // Guarda el archivo en una ubicación deseada
        $ruta_destino = "/var/www/html/Sistemas_de_tickets/archivos/" . $nombre_archivo;
        move_uploaded_file($temp_archivo, $ruta_destino);
    } else {
        // El usuario no cargó un archivo
        $ruta_destino = null;
    }

    
    // Inserta los datos en la base de datos, incluyendo la ruta del archivo adjunto
    $val2 = Tickets::insertar($etiqueta, $asunto, $descripcion, $hora, $fecha, $id_responsable, $id_corresponsable, $crea, $ruta_destino);
    header("Location: inicio");
}



}