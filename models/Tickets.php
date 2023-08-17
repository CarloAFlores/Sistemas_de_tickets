<?php 
namespace Model;

class Tickets extends General{
	protected static $tabla = 'tickets';
	protected static $columnasDB = ['id','etiqueta','asunto','descripcion','hora_creacion','hora_finalizacion','fecha_creacion','fecha_finalizada','adjunto','id_status','id_satisfaccion','id_responsable','id_corresponsable','estado','nmr_nom','nombre_status','color','progreso','nombre','nombre_satisfaccion','nombre_puesto','responsable','corresponsable'];

	public $id ;
	public $etiqueta;
	public $asunto;
	public $descripcion;
	//------------------------
	public $hora_creacion;
	public $hora_finalizacion;
	public $fecha_creacion;
	public $fecha_finalizada;
	//-------------------------
	public $adjunto;
	public $id_status;
	public $id_satisfaccion;
	public $id_responsable;
	public $id_corresponsable;
	public $estado;
	public $nmr_nom;
	public $nombre_status;
	public $color;
	public $progreso;
	public $nombre;
	public $nombre_satisfaccion;
	public $nombre_puesto;
	public $responsable;
	public $corresponsable;

	public function __construct($args = []){
		$this->id = $args['id'] ?? null;
		$this->etiqueta = $args['etiqueta'] ?? '';
		$this->asunto = $args['asunto'] ?? '';
		$this->descripcion = $args['descripcion'] ?? '';
		//---------------------------------------------------
		$this->hora_creacion = date('H:m:s');
		$this->hora_finalizacion = date('H:m:s');
		$this->fecha_creacion = date('Y-m-d');
		$this->fecha_finalizada = date('Y-m-d');
		//---------------------------------------------------
		$this->adjunto = $args['adjunto'] ?? '';
		$this->id_status = $args['id_status'] ?? '';
		$this->id_satisfaccion = $args['id_satisfaccion'] ?? '';
		$this->id_responsable = $args['id_responsable'] ?? '';
		$this->id_corresponsable = $args['id_corresponsable'] ?? '';
		$this->estado = $args['estado'] ?? '';
		$this->nmr_nom = $args['nmr_nom'] ?? '';

	}

	public static function final(){
		$query = "SELECT usuarios.nombre,status.nombre_status,status.color,status.progreso,tickets.* FROM " . static::$tabla." INNER JOIN status ON  tickets.id_satisfaccion = status.id 
		    INNER JOIN usuarios ON tickets.nmr_nom = usuarios.identificador
		    WHERE tickets.estado = 1
		    ORDER BY  tickets.id ASC
		    LIMIT 5
		    ";
        $resultado = self::consultarSQL($query);
        return $resultado;
	}

	public static function busqueda($id){
		$query = "SELECT usuarios.nombre,status.nombre_status,status.color,status.progreso,satisfaccion.nombre_satisfaccion,puesto.nombre_puesto,responsable.nombre as responsable,corresponsable.nombre as corresponsable,tickets.* FROM " . static::$tabla  ." INNER JOIN status ON  tickets.id_satisfaccion = status.id 
		    INNER JOIN usuarios ON tickets.nmr_nom = usuarios.identificador
		    INNER JOIN satisfaccion ON tickets.id_satisfaccion = satisfaccion.id 
		    INNER JOIN puesto ON tickets.id_puesto = puesto.id
		    INNER JOIN usuarios AS responsable ON tickets.id_responsable = responsable.identificador
		    INNER JOIN usuarios AS corresponsable ON tickets.id_corresponsable = corresponsable.identificador
		    WHERE tickets.id = ${id}";
		$resultado = self::consultarSQL($query);
		return array_shift( $resultado ) ;
	}

	public static function borrar($id){
		$query = "UPDATE". static::$tabla . "SET estado WHERE tickets.id = ${id}";
		$resultado = self::consultarSQL($query);
		return  $resultado;
	}
}
?>
