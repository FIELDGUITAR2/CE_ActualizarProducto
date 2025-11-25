<?php
require_once ("logica/Persona.php");
require_once ("logica/Cliente.php");

$idCliente = $_GET["idCliente"];
$estado = $_GET["estado"];
$cliente = new Cliente($idCliente);
$cliente -> cambiarEstado($estado);
if($estado){
    echo "<i class='fa-solid fa-check'></i>";
}else{
    echo "<i class='fa-solid fa-xmark'></i>";
}
