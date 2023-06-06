<!DOCTYPE html>
<html>
<head>
	<title>Metropolis</title>
	<!-- Agrega los enlaces a los archivos de Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Agrega tus propios estilos CSS -->
	<link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
</head>
<body>
	<!-- Agrega el encabezado del sitio web -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">					
					<li class="nav-item">
					<a class="nav-link" href="{{url('login')}}">Iniciar sesión</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="{{url('register')}}">Registrarse</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="{{url('dashboard')}}">Tu dashboard</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<!-- Agrega el cuerpo del sitio web -->
	<br/>
	<main>
	<div class="container">
				
	</div>
	</main>

	<!-- Agrega el pie de página del sitio web -->
	<footer>
		<div class="container">
			<p>Derechos reservados © 2023</p>
		</div>
	</footer>

	<!-- Agrega los enlaces a los archivos de Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>