<?php
require_once("persistencia/Conexion.php");
require_once("persistencia/ProveedorDAO.php");

class Proveedor{
    private $id;

    private $nombre;

    public function __construct($id=0, $nombre=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
    }
    public function getId(){
        return $this -> id;
    }
    public function setId($id){
        $this -> id = $id;
    }  
    public function getNombre(){
        return $this -> nombre;
    }
    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }

    public function consultar(){
        $conexion = new Conexion();
        $conexion -> abrir();
        $proveedorDAO = new ProveedorDAO();
        $conexion -> ejecutar($proveedorDAO -> consultar());
        $proveedores = array();
        while ($registro = $conexion -> registro()){
            $p = new Proveedor($registro[0], $registro[1]);
            array_push($proveedores, $p);
        }
        $conexion -> cerrar();
        return $proveedores;
    }
    
    public function consultarPorId(){
        $conexion = new Conexion();
        $conexion -> abrir();
        $proveedorDAO = new ProveedorDAO($this -> id);
        $conexion -> ejecutar($proveedorDAO -> consultarPorId());
        $tupla = $conexion -> registro();
        $conexion -> cerrar();
        $this -> nombre = $tupla[0];
    }
}
?>