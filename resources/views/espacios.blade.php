<x-app-layout>
<head>
	<title>Metropolis</title>
	<!-- Agrega los enlaces a los archivos de Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Agrega tus propios estilos CSS -->
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<!-- Agrega el cuerpo del sitio web -->
	<main>
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registro de Espacios') }}
        </h2>
    </x-slot>
	<br/>
		<div class="container">
			<div class="container">
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
<br/>
	<!-- Agrega los enlaces a los archivos de Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</x-app-layout>