<x-app-layout>
<head>
	<title>Gestor de espacios</title>
	<!-- Agrega los enlaces a los archivos de Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Agrega tus propios estilos CSS -->
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<main>
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Información ampliada del espacio') }}
        </h2>
    </x-slot>
	<br/>
	<div class="container">
			<div class="container">
				<div class="col-md-15">
				<table class="table">
						<thread class="thread-dark">
							<tr>
								<th scope="col">Nombre</th>
								<th scope="col">Área</th>
								<th scope="col">Capacidad</th>
								<th scope="col">Disponibilidad</th>
								<th scope="col" colspan=3></th>
							</tr>
						</thread>
						<tbody>
						<tr>
							<th scope="row">{{ $espacio->nombre }}</th>
							<td>{{ $espacio->area }}</td>
							<td>{{ $espacio->capacidad }}</td>
							<td>{{ $espacio->disponibilidad }}</td>
						</tr>
						</tbody>
				</table>
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
</x-app-layout>