<?php 
namespace Model;

class Usuarios extends General{
	protected static $tabla = 'usuarios';
	protected static $columnasDB = ['id','nombre','id_puesto', 'identificador', 'password', 'estado'];

	public $id ;
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

		//---------------------------------------------------
		$this->password = $args['password'] ?? '';
		$this->estado = $args['estado'] ?? '';

	}


	public static function ObtenerUsuariosDeLaBaseDeDatos() {
        $query = "SELECT id,nombre, identificador FROM usuarios";
       
        $usuarios = self::$db->query($query);

        return $usuarios;
    }

    public static function seleccionar($termino){
    $query = "SELECT nombre FROM usuarios WHERE nombre LIKE '%" . $termino . "%'";
	$resultado = self::consultarSQL($query);
   
    return $resultado;
	
	}

	
}
?>