<?php
require_once("logica/Producto.php");
$id = $_SESSION["id"];
if ($_SESSION["rol"] != "admin") {
    header('Location: ?pid=' . base64_encode("noAutorizado.php"));
}
?>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="card text-start">
                <div class="card-body">
                    <h4 class="card-title">Actualizar producto</h4>
                    <select name="" id="">
                        <option value=''>Select one</option>
                        <?php
                        $producto = new Producto();
                        $productos = $producto->consultar();
                        foreach ($productos as $p) {
                            echo "<option value='".$p->getId()."'>".$p->getNombre()."</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

        </div>
    </div>
</body>