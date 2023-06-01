<!DOCTYPE html>
<html>
<head>
	<title>Metropolis</title>
	<!-- Agrega los enlaces a los archivos de Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Agrega tus propios estilos CSS -->
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<!-- Agrega el encabezado del sitio web -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="{{ url('dashboard') }}">Dashboard</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="{{url('reservas')}}">Volver</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<main>
	<div class="container">
        
			<div class="container">
				<div class="col-md-15">
                <br/>
        <h2>Gestión del espacio: {{ $espacio->nombre }}</h2>
                <form action='/espacios/{{$espacio->id}}' method='POST'>
                        @csrf
                        @method('put')
                    <div class="mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" disabled value="{{ $espacio->id }}" name="id">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del espacio</label>
                        <input type="text" class="form-control" id="nombre" value="{{ $espacio->nombre }}" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="area" class="form-label">Area</label>
                        <input type="text" class="form-control" id="area" value="{{ $espacio->area }}" name="area">
                    </div>
                    <div class="mb-3">
                        <label for="capacidad" class="form-label">Capacidad</label>
                        <input type="datetime" class="form-control" id="capacidad" value="{{ $espacio->capacidad }}" name="capacidad">
                    </div>
                    <div class="mb-3">
                        <label for="disponibilidad" class="form-label">Disponibilidad</label>
                        <input type="text" class="form-control" id="disponibilidad" value="{{ $espacio->disponibilidad }}" name="disponibilidad">
                    </div>
                    <div class="mb-3">
                        <label for="imagenlink" class="form-label">URL Imagen</label>
                        <input type="text" class="form-control" id="imagenlink" value="{{ $espacio->imagen_url }}" name="imagenlink">
                    </div>

                <button type="submit" class="btn btn-success">Guardar</button>

                </form>
			</div>
					</div>
				</div>
			</div>
							

	
	</main>
	<!-- Agrega el pie de página del sitio web -->
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
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