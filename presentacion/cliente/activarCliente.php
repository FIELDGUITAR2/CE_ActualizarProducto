<?php 
require_once ("logica/Persona.php");
require_once ("logica/Cliente.php");
$correo = base64_decode($_GET["c"]);
$cliente = new Cliente();
$cliente -> activar($correo);
?>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col">
				<div class='alert alert-success' role='alert'>
					Cliente activado
				</div>
			</div>
		</div>
	</div>
</body>
