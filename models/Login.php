<?php 
namespace Model;

class Login extends General{

	//En este apartado definicmos nuestros valores de tabla como de columna
	protected static $tabla = 'usuarios';
	protected static $columnasDB = ['id','nombre','id_puesto','identificador','password','estado'];


	public $id;
	public $nombre;
	public $id_puesto;
	public $identificador;
	public $password;
	public $estado;

	public function __construct($args = []){
		$this->id = $args['id'] ?? null;
		$this->nombre = $args['nombre'] ?? '';
		$this->id_puesto = $args['id_puesto'] ?? '';
		$this->identificador = $args['identificador'] ?? '';
		$this->password = $args['password'] ?? "";
		$this->estado = $args['estado'] ?? "0";
	}

	//En esta funcion nos encargaremos de validar nuestro usuario mediante el identificador y password, para que no vaya vacio
	public function validarLogin(){
		if(!$this->identificador) {
			self::$alertas['error'][] = 'El identificador es Obligatorio';
		}
		if(!$this->password) {
			self::$alertas['error'][] = 'El password es obligatorio';
		}
		return self::$alertas;
	}

	//Esta funcion es la encargada de comprobar que nuestro passaword escrito sea igual al password de la base de la datos
	public function comprobarPasswordAndVerificado($password){

		if($password !== $this->password || !$this->estado){
			self::$alertas['error'][] = 'Password Incorrecto o tu identificador no ha sido confirmado';
		}else{
			return true;
		}
	}

	
}
 ?>
