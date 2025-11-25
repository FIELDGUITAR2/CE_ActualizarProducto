<?php
require_once ("logica/Producto.php");
require_once ("logica/Proveedor.php");
require_once ("logica/TipoProducto.php");

$filtro = $_GET["filtro"];
$filtro = str_replace("%20", " ", $filtro);
$producto = new Producto();
$productos = $producto -> buscar($filtro);

if (count($productos) == 0) {
    echo "<div class='alert alert-warning' role='alert'>
                                    No hay registros
                                    </div>";
} else {
?>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tamaño</th>
            <th scope="col">Precio de venta</th>
            <th scope="col">imagen</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Tipo de Producto</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($productos as $p) {
        echo "<tr>";
        echo "<td>" . $p -> getId() . "</td>";
        echo "<td>" . $p -> getNombre() . "</td>";
        echo "<td>" . $p -> getTamano() . "</td>";
        echo "<td>" . $p -> getPrecio() . "</td>";
        if($p -> getImagen() != ""){
            echo "<td><img src='imagenes/" . $p -> getImagen() . "' height='60px'></td>";                                    
        }else{
            echo "<td></td>";
        }
        echo "<td>" . $p -> getProveedor() -> getNombre() . "</td>";
        echo "<td>" . $p -> getTipoProducto() -> getNombre(). "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
<?php } ?>      