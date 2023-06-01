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
					<a class="nav-link" href="{{url('dashboard')}}">Dashboard</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{url('reservas')}}">Lista de reservas</a>
				</li>
				</ul>
			</div>
		</nav>
	</header>

	<!-- Agrega el cuerpo del sitio web -->
	<main>
		<div class="container">
			<div class="container">
				<div class="col-md-15">
					<br/>
					<h2>Registro de Espacios</h2>
                    <br/>
				</div>
				<div>
					<table class="table">
                            <thread class="thread-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Area</th>
                                    <th scope="col">Capacidad</th>
                                    <th scope="col">Disponibilidad</th>
                                    <th scope="col" colspan=3></th>
                                </tr>
                            </thread>
                            <tbody>
                            @foreach($espacios as $espacio)
                            <tr>
                                <th scope="row">{{ $espacio->id }}</th>
                                <td>{{ $espacio->nombre }}</td>
                                <td>{{ $espacio->area }}</td>
                                <td>{{ $espacio->capacidad }}</td>
                                <td>{{ $espacio->disponibilidad }}</td>
                                <td>
                                    <a href="{{ url('espacios/' . $espacio->id )}}" class="btn btn-primary">Mostrar información</a>
                                </td>
                                <td>
                                    <a href="{{ url('espacios/' . $espacio->id . '/edit')}}" class="btn btn-warning">Gestionar</a>
                                </td>
                                <td>
                                    <form action="{{ url('espacios',$espacio->id)}}" method='POST'>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
						</tbody>
					</table>
				</div>
			</div>
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