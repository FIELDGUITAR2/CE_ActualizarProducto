<?php
require_once ("persistencia/Conexion.php");
require_once ("persistencia/ProductoDAO.php");

class Producto{
    private $id;
    private $nombre;
    private $tamano;
    private $precio;
    private $imagen;
    private $proveedor;
    private $tipoProducto;

    public function __construct($id=0, $nombre="", $tamano=0, $precio=0, $imagen="", $proveedor=0, $tipoProducto=0){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> tamano = $tamano;
        $this -> precio = $precio;
        $this -> imagen = $imagen;
        $this -> proveedor = $proveedor;
        $this -> tipoProducto = $tipoProducto;
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
    public function getTamano(){
        return $this -> tamano;
    }
    public function setTamano($tamano){
        $this -> tamano = $tamano;
    }
    public function getPrecio(){
        return $this -> precio;
    }
    public function setPrecio($precio){
        $this -> precio = $precio;
    }
    public function getImagen(){
        return $this -> imagen;
    }
    public function setImagen($imagen){
        $this -> imagen = $imagen;
    }
    public function getProveedor(){
        return $this -> proveedor;
    }
    public function setProveedor($proveedor){
        $this -> proveedor = $proveedor;
    }
    public function getTipoProducto(){
        return $this -> tipoProducto;
    }
    public function setTipoProducto($tipoProducto){
        $this -> tipoProducto = $tipoProducto;
    }

    public function crear(){
        $conexion = new Conexion();
        $conexion -> abrir();
        $productoDAO = new ProductoDAO("", $this -> nombre, $this -> tamano, $this -> precio, $this -> imagen, $this -> proveedor, $this -> tipoProducto);        
        $conexion -> ejecutar($productoDAO -> crear());
        $conexion -> cerrar();
    }
    
    public function consultar(){
        $conexion = new Conexion();
        $conexion -> abrir();
        $productoDAO = new ProductoDAO();        
        $conexion -> ejecutar($productoDAO -> consultar());
        $productos = array();
        while (($tupla = $conexion -> registro()) != null){
            $proveedor = new Proveedor($tupla[5]);
            $proveedor -> consultarPorId();            
            $tipoProducto = new TipoProducto($tupla[6]);
            $tipoProducto -> consultarPorId();
            $producto = new Producto($tupla[0], $tupla[1], $tupla[2], $tupla[3], $tupla[4], $proveedor, $tipoProducto);
            array_push($productos, $producto);
        }
        $conexion -> cerrar();
        return $productos;
    }

    public function buscar($filtro){
        $conexion = new Conexion();
        $conexion -> abrir();
        $productoDAO = new ProductoDAO();
        $conexion -> ejecutar($productoDAO -> buscar($filtro));
        $productos = array();
        while (($tupla = $conexion -> registro()) != null){
            $proveedor = new Proveedor($tupla[5]);
            $proveedor -> consultarPorId();
            $tipoProducto = new TipoProducto($tupla[6]);
            $tipoProducto -> consultarPorId();
            $producto = new Producto($tupla[0], $tupla[1], $tupla[2], $tupla[3], $tupla[4], $proveedor, $tipoProducto);
            array_push($productos, $producto);
        }
        $conexion -> cerrar();
        return $productos;
    }

}

?>