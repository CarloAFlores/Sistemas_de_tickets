<?php 

namespace MVC;


class Router{
	public function notFound(){
    include __DIR__ . "/views/paginas/notfound.php";
}



	//En estos arreglos se almacenaran los llamados GET y POST
	public $rutasGET = [];
	public $rutasPOST = [];


	//En esta funcion, mediante el index de la carpeta public mandaremos la url y la funcion a donde nos dirigiremos
	public function get($url,$fn){
		$this->rutasGET[$url] = $fn;
	}

	public function post($url,$fn){
		$this->rutasPOST[$url] = $fn;
	}


	//En esta funcion se comprobaran que tipo de metodo fue enviado
	public function comprobarRutas(){
		//Esto funciona para saber lainfo de la url
		$urlActual = $_SERVER['PATH_INFO'] ?? '/';
		//Funcion para saber el metodo que estaremos ocupando [GET,POST,PUT]
		$metodo = $_SERVER['REQUEST_METHOD'];
		


		//Concicion en caso que estemos usando el metodo get
		if($metodo === 'GET'){
			//Asignacion de la ruta a una variable, en caso de no exister dicha ruta, nos lanzara un null
			$fn = $this->rutasGET[$urlActual] ?? null;
		} else {
			$fn = $this->rutasPOST[$urlActual] ?? null;
		}

		//Condicion en que nos redireccionara a la pagina que deseemos
		if($fn){
			call_user_func($fn,$this);
		}else{
			//En caso de ser falso o null solo aparecera este mensaje
			 $this->notFound();
		}
	}

	

	//Esta funcion es la encargada de dirigirnos a la view mediante los valores de "$view" y "$datos"
	//Donde $view es enviada desde nuestro Controller y nos dira que carpeta y archivo mandar
	//Mientras $datos es el encargado de almacenar los datos mediante un arreglo
	public function render($view, $datos=[]){
		foreach ($datos as $key => $values) {
			$$key = $values;
		}
		ob_start();
		include __DIR__ . "/views/$view.php";

		$contenido = ob_get_clean();

		include __DIR__ . "/views/layout.php";

	} 

}
 ?>
