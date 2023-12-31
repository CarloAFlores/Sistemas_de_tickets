<?php
namespace Model;
class General {

    // Base DE DATOS
    protected static $db;
    protected static $tabla = '';
    protected static $columnasDB = [];

    // Alertas y Mensajes
    protected static $alertas = [];
    
    // Definir la conexión a la BD - includes/database.php
    public static function setDB($database) {
        self::$db = $database;
    }

    public static function setAlerta($tipo, $mensaje) {
        static::$alertas[$tipo][] = $mensaje;
    }

    // Validación
    public static function getAlertas() {
        return static::$alertas;
    }

    public function validar() {
        static::$alertas = [];
        return static::$alertas;
    }

    // Consulta SQL para crear un objeto en Memoria
    public static function consultarSQL($query) {
        // Consultar la base de datos
        $resultado = self::$db->query($query);

        // Iterar los resultados
        $array = [];
        while($registro = $resultado->fetch_assoc()) {
            $array[] = static::crearObjeto($registro);
        }

        // retornar los resultados
        return $array;
    }

    // Crea el objeto en memoria que es igual al de la BD
    protected static function crearObjeto($registro) {
        $objeto = new static;

        foreach($registro as $key => $value ) {
            if(property_exists( $objeto, $key  )) {
                $objeto->$key = $value;
            }
        }

        return $objeto;
    }

    // Identificar y unir los atributos de la BD
    public function atributos() {
        $atributos = [];
        foreach(static::$columnasDB as $columna) {
            if($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    // Sanitizar los datos antes de guardarlos en la BD
    public function sanitizarAtributos() {
        $atributos = $this->atributos();
        $sanitizado = [];
        foreach($atributos as $key => $value ) {
            $sanitizado[$key] = self::$db->escape_string($value);
        }
        return $sanitizado;
    }

    // Sincroniza BD con Objetos en memoria
    public function sincronizar($args=[]) { 
        foreach($args as $key => $value) {
          if(property_exists($this, $key) && !is_null($value)) {
            $this->$key = $value;
          }
        }
    }

    // Registros - CRUD
    public function guardar() {
        $resultado = '';
        if(!is_null($this->id)) {
            // actualizar
            $resultado = $this->actualizar();
        } else {
            // Creando un nuevo registro
            $resultado = $this->crear();
        }
        return $resultado;
    }

    // Todos los registros
    public static function all() {
        $query = "SELECT * FROM " . static::$tabla;
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    // Busca un registro por su id
    public static function find($id) {
        $query = "SELECT * FROM " . static::$tabla  ." WHERE id = ${id}";
        $resultado = self::consultarSQL($query);
        return array_shift( $resultado ) ;
    }

    // Obtener Registros con cierta cantidad
    public static function get($limite) {
        $query = "SELECT * FROM " . static::$tabla . " LIMIT ${limite}";
        $resultado = self::consultarSQL($query);
        return array_shift( $resultado ) ;
    }

    //
    public static function where($columna,$valor) {
        $query = "SELECT * FROM " . static::$tabla  ." WHERE ${columna} = '${valor}'";
        $resultado = self::consultarSQL($query);
        return array_shift( $resultado ) ;
    }

    // crea un nuevo registro
    public function crear() {

        echo("arg1"); exit();
        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        // Insertar en la base de datos
        $query = " INSERT INTO " . static::$tabla . " ( ";
        $query .= join(', ', array_keys($atributos));
        $query .= " ) VALUES (' "; 
        $query .= join("', '", array_values($atributos));
        $query .= " ') ";

        // Resultado de la consulta
        $resultado = self::$db->query($query);
        return [
           'resultado' =>  $resultado,
           'id' => self::$db->insert_id
        ];
    }

    // Actualizar el registro
    public function actualizar() {
        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        // Iterar para ir agregando cada campo de la BD
        $valores = [];
        foreach($atributos as $key => $value) {
            $valores[] = "{$key}='{$value}'";
        }

        // Consulta SQL
        $query = "UPDATE " . static::$tabla ." SET ";
        $query .=  join(', ', $valores );
        $query .= " WHERE id = '" . self::$db->escape_string($this->id) . "' ";
        $query .= " LIMIT 1 "; 

        // Actualizar BD
        $resultado = self::$db->query($query);
        return $resultado;
    }

    public static function borrar($id){
        $query = "UPDATE tickets SET estado = 0 WHERE id = $id";
        $resultado = self::$db->query($query);
        return $resultado;
    }


    public static function insertar($etiqueta, $asunto, $descripcion, $hora, $fecha, $id_responsable, $id_corresponsable, $crea, $ruta_adjunto){
        $query = "INSERT INTO tickets (etiqueta, asunto, descripcion, hora_creacion, hora_finalizacion, fecha_creacion, fecha_finalizado, adjunto, id_status, id_satisfaccion, id_responsable, id_corresponsable, estado, nmr_nom, id_puesto) VALUES ('$etiqueta', '$asunto', '$descripcion', '$hora', '00:00:00', '$fecha', NULL , '$ruta_adjunto', '1', '3', '$id_responsable', '$id_corresponsable', '1', '$crea', '2')";

        $resultado = self::$db->query($query);
        return $resultado;
    }

    public static function actualizarestado($proceso, $otroValor){
        $query = "UPDATE tickets SET id_status = $proceso WHERE id = $otroValor";

        $resultado = self::$db->query($query);
        return $resultado;

    }

    public static function actualizardatosformulario($id, $etiqueta, $asunto, $descripcion, $fecha, $hora, $crea, $id_responsable, $id_corresponsable, $ruta_destino){
        $query = "UPDATE tickets 
                SET etiqueta = '$etiqueta', 
                asunto = '$asunto', 
                descripcion = '$descripcion', 
                hora_creacion = '$hora', 
                hora_finalizacion = '0:00:00', 
                fecha_creacion = '$fecha', 
                fecha_finalizado = NULL, 
                adjunto = '$ruta_destino', 
                id_status = '1', 
                id_satisfaccion = '3', 
                id_responsable = '$id_responsable', 
                id_corresponsable = '$id_corresponsable', 
                estado = '1', 
                nmr_nom = '$crea', 
                id_puesto = '2'
                WHERE id = $id;";

        $resultado = self::$db->query($query);
        return $resultado;
    }


}