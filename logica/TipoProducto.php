<?php
require_once 'persistencia/Conexion.php';
require_once 'persistencia/TipoProductoDAO.php';
class TipoProducto {
	private $id;
	private $nombre;

	public function __construct($id="", $nombre="") {
		$this->id = $id;
		$this->nombre = $nombre;
	}
    public function consultar(){
        $conexion = new Conexion();
        $conexion -> abrir();
        $tipoProductoDAO = new tipoProductoDAO();
        $conexion -> ejecutar($tipoProductoDAO -> consultar());
        $tipoProductos= array();
        while(($tupla = $conexion -> registro()) != null){
            $tipoProducto = new TipoProducto($tupla[0], $tupla[1]);
            array_push($tipoProductos, $tipoProducto);
        }
        $conexion -> cerrar();
        return $tipoProductos;
    }

	public function getId() {
		return $this->id;
	}
    public function getNombre() {
        return $this->nombre;
    }

	public function setId($id) {
		$this->id = $id;
	}
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function consultarPorId(){
        $conexion = new Conexion();
        $conexion -> abrir();
        $tipoPropductoDAO = new TipoProductoDAO($this -> id);
        $conexion -> ejecutar($tipoPropductoDAO -> consultarPorId());
        $tupla = $conexion -> registro();
        $conexion -> cerrar();
        $this -> nombre = $tupla[0];
    }
}