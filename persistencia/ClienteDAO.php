<?php
class ClienteDAO {
    private $id;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $correo;
    private $clave;
    private $estado;

    public function __construct($id=0, $nombre="", $apellido="", $fechaNacimiento="", $correo="", $clave="", $estado=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> fechaNacimiento = $fechaNacimiento;
        $this -> correo = $correo;
        $this -> clave = $clave;
        $this -> estado = $estado;     
    }
    
    public function registrar(){
        return "insert into Cliente(nombre, apellido, fechaNacimiento, correo, clave, estado)
                values ('" . $this -> nombre . "', '" . $this -> apellido . "', '" . $this -> fechaNacimiento . "', '" . $this -> correo . "', md5('" . $this -> clave . "'), '0')";
    }

    public function activar($correo){
        return "update Cliente
                set estado = '1'
                where correo = '" . $correo . "'";
    }
    
    public function consultar(){
        return "select idCliente, nombre, apellido, fechaNacimiento, correo, estado
                from Cliente";
    }

    public function consultarPorID(){
        return "select nombre, apellido, fechaNacimiento, correo
                from Cliente
                where idCliente = '" . $this -> id . "'";
    }
    public function autenticar(){
        return "select idCliente, estado
                from Cliente
                where correo = '" . $this -> correo . "' and clave = md5('" . $this -> clave . "')";
    }
    
    public function cambiarEstado($estado){
        return "update Cliente 
                set estado = '" . $estado . "'
                where idCliente = '" . $this -> id . "'";
    }
}

