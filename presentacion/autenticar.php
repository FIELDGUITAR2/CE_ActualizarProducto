<?php
require_once("logica/Persona.php");
require_once("logica/Admin.php");
require_once("logica/Cliente.php");

$error = false;

if (isset($_POST["autenticar"])) {
	$correo = $_POST["correo"];
	$clave = $_POST["clave"];

	// Intentar autenticar como administrador
	$admin = new Admin("", "", "", $correo, $clave);

	if ($admin->autenticar()) {
		$_SESSION["id"] = $admin->getId();
		$_SESSION["rol"] = "admin";
		header('Location: ?pid=' . base64_encode("presentacion/sesionAdmin.php"));
		exit();
	} else {
		// Intentar autenticar como cliente
		$cliente = new Cliente("", "", "", $correo, $clave);
		if ($cliente->autenticar()) {
			$_SESSION["id"] = $cliente->getId();
			$_SESSION["rol"] = "cliente";
			header('Location: ?pid=' . base64_encode("presentacion/sesionCliente.php"));
			exit();
		} else {
			$error = true;
		}
	}
}
?>

<body>
	<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card login-card p-4">
        <h4 class="text-center mb-4" style="color: var(--text-main);">Iniciar sesión</h4>

        <?php if ($error): ?>
            <div class="alert alert-danger text-center py-2 mb-3" role="alert">
                Correo o clave incorrectos.
            </div>
        <?php endif; ?>

        <form action="?pid=<?php echo base64_encode("presentacion/autenticar.php") ?>" method="post">
            <div class="mb-3">
                <label for="correo" class="form-label text-muted">Correo electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo" required>
            </div>

            <div class="mb-3">
                <label for="clave" class="form-label text-muted">Contraseña</label>
                <input type="password" class="form-control" id="clave" name="clave" placeholder="Ingrese su clave" required>
            </div>

            <div class="d-grid mt-4">
                <button type="submit" name="autenticar" class="btn btn-custom">Ingresar</button>
            </div>

            <div class="text-center mt-3">
                <a href="?pid=<?php echo base64_encode("presentacion/registrar.php") ?>" class="register-link">
                    ¿No tienes cuenta? <span class="fw-semibold">Registrarse</span>
                </a>
            </div>
        </form>
    </div>
</div>
</body>