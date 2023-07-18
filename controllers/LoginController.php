<?php 
namespace Controllers;
//Se debe importa el router para que se pueda hacer uso de sus funciones
use MVC\Router;
use Model\Login;


class LoginController{
	
	//En esta parte es donde le decimos a la funcion "render" a que parte de la "view" vamos a ir
	public static function index(Router $router){
		//En este arreglo se guardaran todos los errores que se tenga en el index del LOGIN
		$alertas = [];
		session_start();
		$_SESSION['login'] = false;

		//Aca es donde pedimos el tipo de metodo se mandara, en este caso es POST 
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			//Aca se crea una nueva instancia para nuestro modelo, en este caso se mandara pos POST
			$auth = new Login($_POST);

			//En este caso esta diciendo que "alertas" use nuestra instancia creada para ir a la funcion validarLogin()
			$alertas = $auth->validarLogin();


			//Aca observamos si nuestro arreglo va vacio o lleno, en caso de ir vacio pasara a la siguiente validacion
			if(empty($alertas)){
				//ESte es el encargado de verificar si nuestro usuario existe, se puede hacer un var_dump para obeservar el resultado
				$usuario = Login::where('identificador', $auth->identificador);


				//En caso de que la validacion anterior 
				if($usuario){
					//Esta ultima validacion es la ncargada de verificar si nuestra contrasena es correcta o incorrecta
					if ($usuario->comprobarPasswordAndVerificado($auth->password)){
						$_SESSION['id'] = $usuario->id;
						$_SESSION['nombre'] = $usuario->nombre;
						$_SESSION['identificador'] = $usuario->identificador;
						$_SESSION['login'] = true;
						//Pasando la validacion este nos reedirigira a nuestra siguiente pantalla
						echo "<script language=\"javascript\">
							window.location.href=\"index.php/nosotros\";
							</script>";
					}
				}
			}

		}
		$alertas = Login::getAlertas();

		$router->render('login/index',[
			'alertas' => $alertas
		]);
	}

	public static function logout(){
		session_start();

		$_SESSION = [];
		var_dump($_SESSION);
		

        echo "<script language=\"javascript\">
        window.location.href=\"http://localhost/SIstemas_de_tickets/public/\";
        </script>";
	}
}