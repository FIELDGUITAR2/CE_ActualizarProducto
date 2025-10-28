<?php
class ProveedorDAO{
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
        return "select idProveedor, nombre
                from Proveedor";
    }
    
    public function consultarPorId(){
        return "select nombre
                from Proveedor
                where idProveedor = '" . $this -> id . "'";
    }
    
}
?>