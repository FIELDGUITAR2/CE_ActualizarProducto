<?php
require_once ("logica/Persona.php");
require_once ("logica/Cliente.php");
$cliente = new Cliente();
$clientes = $cliente->consultar();
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
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col">
				<div class="card">
					<div class="card-header">
						<h3>Consultar Cliente</h3>
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
									<th scope="col">Nombre</th>
									<th scope="col">Apellido</th>
									<th scope="col">Fecha de Nacimiento</th>
									<th scope="col">Correo</th>
								</tr>
							</thead>
							<tbody>
							<?php
                            foreach ($clientes as $c) {
                                echo "<tr>";
                                echo "<td>" . $c -> getNombre() . "</td>";
                                echo "<td>" . $c -> getApellido() . "</td>";
                                echo "<td>" . $c -> getfechaNacimiento() . "</td>";
                                echo "<td>" . $c -> getCorreo() . "</td>";
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
</html>