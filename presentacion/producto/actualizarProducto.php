<?php

$id = $_SESSION["id"];
if ($_SESSION["rol"] != "admin") {
    header('Location: ?pid=' . base64_encode("noAutorizado.php"));
}
$admin = new Admin($id);
$admin->consultarPorId();

if (isset($_POST["crear"])) {
    $Id_Producto = $_POST["Id_Producto"];
    $nombre = $_POST["nombre"];
    $tamano = $_POST["tamano"];
    $precio = $_POST["precio"];
    //Envio de archivo
    $imagenNombre = time() . "." . pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
    echo $imagenNombre;
    $imagenRutaLocal = $_FILES["imagen"]["tmp_name"];
    copy($imagenRutaLocal, "imagenes/" . $imagenNombre);

    $proveedor = $_POST["proveedor"];
    $tipoProducto = $_POST["tipoProducto"];
    $producto = new Producto($Id_Producto, $nombre, $tamano, $precio, $imagenNombre, $proveedor, $tipoProducto);
    $producto->actualizarProducto();
}
?>

<body>
    <?php include 'presentacion/menuAdministrador.php'; ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Crear Producto</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_POST["crear"])) {
                            echo "<div class='alert alert-success' role='alert'>
                                    Producto almacenado exitosamente!
                                    </div>";
                        }
                        ?>
                        <form method="post" enctype="multipart/form-data"
                            action="?pid=<?php echo base64_encode("presentacion/producto/crearProducto.php") ?>">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="Id_Producto" placeholder="ID Producto"
                                    required>
                                <?php
                                /*
                                ?>
                                <label for="tipo" class="form-label">Producto a actualizar</label>
                                <select class="form-select" name="Id_Producto" required>
                                    <option value="" disabled selected>Seleccione el producto a actualizar</option>
                                    <?php
                                        $product = new Producto();
                                        $products = $product->consultar();
                                        foreach ($products as $po) {
                                            echo "<option value='" . $po->getId() . "'>" . $po->getNombre() . "</option>";
                                        }
                                    ?>
                                    <option value=""></option>
                                </select>
                                <?php
                                */
                                ?>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" name="tamano" placeholder="Tamaño" required>
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" name="precio" placeholder="Precio" required>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Imagen</label>
                                <input class="form-control" type="file" id="formFile" name="imagen">
                            </div>
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo Producto</label>
                                <select class="form-select" name="tipoProducto" required>
                                    <?php
                                    $tipo = new TipoProducto();
                                    $tipos = $tipo->consultar();
                                    foreach ($tipos as $t) {
                                        echo "<option value='" . $t->getId() . "'>" . $t->getNombre() . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="proveedor" class="form-label">Proveedor</label>
                                <select class="form-select" name="proveedor" required>
                                    <?php
                                    $proveedor = new Proveedor();
                                    $proveedores = $proveedor->consultar();
                                    foreach ($proveedores as $p) {
                                        echo "<option value='" . $p->getId() . "'>" . $p->getNombre() . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" name="crear">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>