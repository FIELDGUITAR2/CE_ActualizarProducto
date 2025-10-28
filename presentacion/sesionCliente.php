<?php
$id = $_SESSION["id"];
if($_SESSION["rol"] != "cliente"){
    header('Location: ?pid=' . base64_encode("noAutorizado.php"));
}
$cliente = new Cliente($id);
$cliente ->consultarPorId();
?>
<body>
	<nav class="navbar navbar-expand-lg navbar-primary bg-primary shadow">
		<div class="container-fluid">
			<!-- Logo -->
			<a class="navbar-brand fw-bold d-flex align-items-center" href="#"> <img
				src="img/logo.jpg" alt="Logo" width="40" height="40"
				class="me-2 rounded-circle"> Cocina Etílica
			</a>

			<button class="navbar-toggler" type="button"
				data-bs-toggle="collapse" data-bs-target="#menu">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="menu">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item"><a class="nav-link active text" href="#">Inicio</a></li>
					<li class="nav-item"><a class="nav-link active text" href="#">Servicio para cliente</a></li>
				</ul>

				<!-- Dropdown con nombre y apellido -->
				<ul class="navbar-nav ms-auto">
					<li class="nav-item dropdown"><a
						class="nav-link dropdown-toggle d-flex align-items-center"
						href="#" role="button" data-bs-toggle="dropdown"
						aria-expanded="false"> <i class="fa-solid fa-user-circle me-2"></i>Cliente: 
            <?php echo $cliente -> getNombre() . " " . $cliente -> getApellido() ?>
          </a>
						<ul class="dropdown-menu dropdown-menu-end shadow">
							<li><a class="dropdown-item" href="editarPerfil.php"><i
									class="fa-solid fa-user-pen me-2"></i> Editar Perfil</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item text-danger"
								href="?salir=true"> <i
									class="fa-solid fa-right-from-bracket me-2"></i> Salir
							</a></li>
						</ul></li>
				</ul>
			</div>
		</div>
	</nav>

</body>