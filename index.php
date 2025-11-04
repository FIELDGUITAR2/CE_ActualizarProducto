<?php
session_start();

require_once ("logica/Persona.php");
require_once ("logica/Admin.php");
require_once ("logica/Cliente.php");
require_once ("logica/Producto.php");
require_once ("logica/Proveedor.php");
require_once ("logica/TipoProducto.php");

if (isset($_GET["salir"])) {
    session_unset();
    session_destroy();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Cocina Etilica</title>
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
	rel="stylesheet">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php 

$paginas_sin_autenticacion = array(
    "presentacion/inicio.php",
    "presentacion/autenticar.php"
);

$paginas_con_autenticacion = array(
    "presentacion/sesionAdmin.php",
    "presentacion/menuAdmin.php",
    "presentacion/encabezado.php",
    "presentacion/producto/actualizarProducto.php",
    "presentacion/producto/consultarProducto.php",
    "presentacion/producto/crearProducto.php",
    "presentacion/cliente/registrarCliente.php"
);

if(!isset($_GET["pid"])){
    include ("presentacion/inicio.php");
}else{

    $pid = base64_decode($_GET["pid"]);
    if(in_array($pid, $paginas_sin_autenticacion)){
        include $pid;
    }else if(in_array($pid, $paginas_con_autenticacion)){
        if(!isset($_SESSION["id"])){
            include "presentacion/autenticar.php";
        }else{
            include $pid;
        }
    }else{
        echo "error 404";
    }
}
?>


</html>
