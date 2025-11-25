<?php 
require_once ("logica/Persona.php");
require_once ("logica/Cliente.php");
if(isset($_POST["registrar"])){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $correo = $_POST["correo"];
    $clave = $_POST["clave"];
    $cliente = new Cliente("", $nombre, $apellido, $correo, $clave, $fechaNacimiento, 0);
    $cliente -> registrar();
    
    $asunto = "Regitro de cliente";
    $mensaje = "Hola " . $nombre . "\n\r";
    $mensaje .= "Debe activar su cuenta haciendo clic en: \n\r";
    $mensaje .= "http://cocinaetilica.itiud.org/?pid=" . base64_encode("presentacion/cliente/activarCliente.php") . "&c=" . base64_encode($correo);
    $opciones = array(
        "From" => "Cocina Etilica <contacto@itiud.org>",
        "Reply-To" => "no-responder@itiud.org"
    );
    
    mail($correo, $asunto, $mensaje, $opciones);
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
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-4"></div>
			<div class="col-4">
				<div class="card">
					<div class="card-header">
						<h3>Registrar Cliente</h3>
					</div>
					<div class="card-body">
						<?php 
						if(isset($_POST["registrar"])){
						    echo "<div class='alert alert-success' role='alert'>
                                    Cliente almacenado. Revise el correo y active la cuenta. El correo puede llegar en spam
                                    </div>";
						}
						?>
						<form method="post" action="?pid=<?php echo base64_encode("presentacion/cliente/registrarCliente.php") ?> ">
							<div class="mb-3">
								<input type="text" class="form-control" name="nombre"
									placeholder="Nombre" required>
							</div>
							<div class="mb-3">
								<input type="text" class="form-control" name="apellido"
									placeholder="Apellido" required>
							</div>
							<div class="mb-3">
								<input type="date" class="form-control" name="fechaNacimiento"
									placeholder="Fecha de Nacimiento" required>
							</div>
							<div class="mb-3">
								<input type="email" class="form-control" name="correo"
									placeholder="Correo" required>
							</div>
							<div class="mb-3">
								<input type="password" class="form-control" name="clave"
									placeholder="Clave" required>
							</div>
							<div class="mb-3">
								<button type="submit" class="btn btn-primary" name="registrar">Registrar</button>
							</div>

						</form>

					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>