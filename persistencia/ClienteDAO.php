<?php
class ClienteDAO {
    private $id;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $correo;
    private $clave;

    public function __construct($id=0, $nombre="", $apellido="", $fechaNacimiento="", $correo="", $clave=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> fechaNacimiento = $fechaNacimiento;
        $this -> correo = $correo;
        $this -> clave = $clave;
    }
    
    public function registrar(){
        return "insert into Cliente(nombre, apellido, fechaNacimiento, correo, clave)
                values ('" . $this -> nombre . "', '" . $this -> apellido . "', '" . $this -> fechaNacimiento . "', '" . $this -> correo . "', md5('" . $this -> clave . "'))";
    }

    public function consultar(){
        return "select idCliente, nombre, apellido, fechaNacimiento, correo
                from Cliente";
    }

    public function consultarPorID(){
        return "select nombre, apellido, fechaNacimiento, correo
                from Cliente
                where idCliente = '" . $this -> id . "'";
    }
    public function autenticar(){
        return "select idCliente
                from Cliente
                where correo = '" . $this -> correo . "' and clave = md5('" . $this -> clave . "')";
    }
}

