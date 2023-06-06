<x-app-layout>
<head>
	<title>Metropolis</title>
	<!-- Agrega los enlaces a los archivos de Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Agrega tus propios estilos CSS -->
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<main>
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestor de espacios') }}
        </h2>
    </x-slot>
	<br/>
	<div class="container">
			<div class="container">
				<div class="col-md-15">
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
				<br/>
				<footer>
		<div class="container">
			<p>Derechos reservados © 2023</p>
		</div>
	</footer>	
	<br/>
			</div>
	</main>
	<!-- Agrega el pie de página del sitio web -->
	

	<!-- Agrega los enlaces a los archivos de Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</x-app-layout>