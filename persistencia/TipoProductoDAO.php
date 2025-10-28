<?php
class TipoProductoDAO {
    private $idTipoProducto;
    private $nombre;

    public function __construct($idTipoProducto = "", $nombre = "") {
        $this->idTipoProducto = $idTipoProducto;
        $this->nombre = $nombre;
    }

    public function consultar(){
        return "select idTipoProducto, nombre
                from TipoProducto
                ";
    }
    
    public function consultarPorId(){
        return "select nombre
                from TipoProducto
                where idTipoProducto = '" . $this -> idTipoProducto . "'";
    }
    

}
?>