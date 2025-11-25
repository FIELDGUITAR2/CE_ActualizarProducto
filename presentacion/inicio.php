<body>
	<!-- NAVBAR -->
	<nav
		class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
		<div class="container">
			<a class="navbar-brand d-flex align-items-center" href="#"> <img
				src="img/logo.jpg" alt="Logo" width="40" height="40" class="me-2">
				Cocina Etilica
			</a>
			<button class="navbar-toggler" type="button"
				data-bs-toggle="collapse" data-bs-target="#menu">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="menu">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link active" href="?pid=<?php echo base64_encode("presentacion/sesionAdmin.php") ?>">Inicio</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Productos</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Categorias</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
				</ul>
				<a href="?pid=<?php echo base64_encode("autenticar.php") ?>" class="btn btn-outline-secondary ms-3"> <i
					class="fa-solid fa-user me-1"></i> Iniciar Sesión
				</a>
			</div>
		</div>
	</nav>


	<!-- CARRUSEL -->
	<div id="carousel" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carousel" data-bs-slide-to="0"
				class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carousel" data-bs-slide-to="1"
				aria-label="Slide 2"></button>
		</div>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/carrusel1.webp" class="d-block w-100 rounded"
					alt="Whisky" style="height: 400px; object-fit: cover;">
			</div>
			<div class="carousel-item">
				<img src="img/carrusel2.webp" class="d-block w-100 rounded"
					alt="Cócteles" style="height: 400px; object-fit: cover;">
			</div>
		</div>

		<button class="carousel-control-prev" type="button"
			data-bs-target="#carousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span> <span
				class="visually-hidden">Anterior</span>
		</button>
		<button class="carousel-control-next" type="button"
			data-bs-target="#carousel" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span> <span
				class="visually-hidden">Siguiente</span>
		</button>
	</div>

	<!-- PRODUCTOS -->
	<div class="container my-5">
		<h2 class="text-center mb-4">Clásicos</h2>
		<div class="row row-cols-1 row-cols-md-3 g-4">
			<div class="col">
				<div class="card h-100 shadow-sm">
					<img src="img/Mojito.webp" class="card-img-top" alt="Mojito">
					<div class="card-body">
						<h5 class="card-title">Mojito</h5>
						<p class="card-text">Ron, hierbabuena, azúcar, limón y soda.</p>
						<p class="fw-bold">$25.000</p>
						<button class="btn btn-secondary w-100">
							<i class="fa-solid fa-cart-plus me-1"></i> Agregar al carrito
						</button>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card h-100 shadow-sm">
					<img src="img/PiñaColada.JFIF" class="card-img-top"
						alt="Piña Colada">
					<div class="card-body">
						<h5 class="card-title">Piña Colada</h5>
						<p class="card-text">Ron, crema de coco y jugo de piña.</p>
						<p class="fw-bold">$28.000</p>
						<button class="btn btn-secondary w-100">
							<i class="fa-solid fa-cart-plus me-1"></i> Agregar al carrito
						</button>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card h-100 shadow-sm">
					<img src="img/Margarita.jfif" class="card-img-top" alt="Margarita">
					<div class="card-body">
						<h5 class="card-title">Margarita</h5>
						<p class="card-text">Tequila, licor de naranja y jugo de limón.</p>
						<p class="fw-bold">$27.000</p>
						<button class="btn btn-secondary w-100">
							<i class="fa-solid fa-cart-plus me-1"></i> Agregar al carrito
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container my-5">
		<h2 class="text-center mb-4">Whisky</h2>
		<div class="row row-cols-1 row-cols-md-3 g-4">
			<div class="col">
				<div class="card h-100 shadow-sm">
					<img src="img/Manhatan.JFIF" class="card-img-top" alt="Manhattan">
					<div class="card-body">
						<h5 class="card-title">Manhattan</h5>
						<p class="card-text">Whisky, vermut rojo y amargo.</p>
						<p class="fw-bold">$32.000</p>
						<button class="btn btn-secondary w-100">
							<i class="fa-solid fa-cart-plus me-1"></i> Agregar al carrito
						</button>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card h-100 shadow-sm">
					<img src="img/Sour.JFIF" class="card-img-top" alt="Whiskey Sour">
					<div class="card-body">
						<h5 class="card-title">Whiskey Sour</h5>
						<p class="card-text">Whisky, jugo de limón y azúcar.</p>
						<p class="fw-bold">$30.000</p>
						<button class="btn btn-secondary w-100">
							<i class="fa-solid fa-cart-plus me-1"></i> Agregar al carrito
						</button>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card h-100 shadow-sm">
					<img src="img/iris.JFIF" class="card-img-top" alt="Irish Coffee">
					<div class="card-body">
						<h5 class="card-title">Irish Coffee</h5>
						<p class="card-text">Whisky irlandés, café y crema batida.</p>
						<p class="fw-bold">$35.000</p>
						<button class="btn btn-secondary w-100">
							<i class="fa-solid fa-cart-plus me-1"></i> Agregar al carrito
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container my-5">
		<h2 class="text-center mb-4">Ron</h2>
		<div class="row row-cols-1 row-cols-md-3 g-4">
			<div class="col">
				<div class="card h-100 shadow-sm">
					<img src="img/Mai.jfif" class="card-img-top" alt="Mai Tai">
					<div class="card-body">
						<h5 class="card-title">Mai Tai</h5>
						<p class="card-text">Ron, curaçao, lima y orgeat.</p>
						<p class="fw-bold">$29.000</p>
						<button class="btn btn-secondary w-100">
							<i class="fa-solid fa-cart-plus me-1"></i> Agregar al carrito
						</button>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card h-100 shadow-sm">
					<img src="img/Zom.jfif" class="card-img-top" alt="Zombie">
					<div class="card-body">
						<h5 class="card-title">Zombie</h5>
						<p class="card-text">Mezcla potente de varios rones, jugos y
							especias.</p>
						<p class="fw-bold">$34.000</p>
						<button class="btn btn-secondary w-100">
							<i class="fa-solid fa-cart-plus me-1"></i> Agregar al carrito
						</button>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card h-100 shadow-sm">
					<img src="img/Tequila.webp" class="card-img-top"
						alt="secondary and Stormy">
					<div class="card-body">
						<h5 class="card-title">secondary ’n’ Stormy</h5>
						<p class="card-text">Ron oscuro con ginger beer y lima.</p>
						<p class="fw-bold">$26.000</p>
						<button class="btn btn-secondary w-100">
							<i class="fa-solid fa-cart-plus me-1"></i> Agregar al carrito
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="bg-light text-center text-muted py-4 mt-5 border-top">
		<div class="container">
			<p class="mb-1">© 2025 Cocina Etilica - Todos los derechos reservados</p>

		</div>
	</footer>

</body>
