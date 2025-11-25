<?php
$cliente = new Cliente();
$clientes = $cliente -> consultar();

$id = $_SESSION["id"];
if ($_SESSION["rol"] != "admin") {
    header('Location: ?pid=' . base64_encode("noAutorizado.php"));
}
$admin = new Admin($id);
$admin->consultarPorId();
?>
<body>
    <?php include 'presentacion/menuAdministrador.php'; ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Consultar Clientes</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if (count($clientes) == 0) {
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
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Fecha de nacimiento</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($clientes as $c) {
                                echo "<tr>";
                                echo "<td>" . $c -> getId() . "</td>";
                                echo "<td>" . $c -> getNombre() . "</td>";
                                echo "<td>" . $c -> getApellido() . "</td>";
                                echo "<td>" . $c -> getFechaNacimiento() . "</td>";
                                echo "<td>" . $c -> getCorreo() . "</td>";
                                echo "<td><div id='estado" . $c -> getId() . "'>" . ($c -> getEstado()?"<i class='fa-solid fa-check'></i>":"<i class='fa-solid fa-xmark'></i>"). "</div></td>";
                                echo "<td><button id='habilitar" . $c -> getId() . "' " . ($c -> getEstado()?"style='display: none;'":"style") . "><i class='fa-regular fa-circle-check'></i></button><button id='inhabilitar" . $c -> getId() . "' " . ($c -> getEstado()?"style":"style='display: none;'") . "><i class='fa-regular fa-circle-xmark'></i></button>";
                                echo "</tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
<?php foreach ($clientes as $c) { 
    echo "$( '#habilitar" . $c -> getId() . "' ).on( 'click', function() {\n";
    echo "\turl = 'cambiarEstadoClienteAjax.php?idCliente=" . $c -> getId() . "&estado=1';\n";
    echo "\t$('#estado" . $c -> getId() . "').load(url);\n";
    echo "\t$('#habilitar" . $c -> getId() . "').hide();\n";
    echo "\t$('#inhabilitar" . $c -> getId() . "').show();\n";
    echo "});\n\n";  
    echo "$( '#inhabilitar" . $c -> getId() . "' ).on( 'click', function() {\n";
    echo "\turl = 'cambiarEstadoClienteAjax.php?idCliente=" . $c -> getId() . "&estado=0';\n";
    echo "\t$('#estado" . $c -> getId() . "').load(url);\n";
    echo "\t$('#habilitar" . $c -> getId() . "').show();\n";
    echo "\t$('#inhabilitar" . $c -> getId() . "').hide();\n";
    echo "});\n\n";
} ?>

</script>
