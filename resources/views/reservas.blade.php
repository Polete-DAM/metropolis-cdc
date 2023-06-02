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
            {{ __('Registro de Reservas') }}
        </h2>
    </x-slot>
	<br/>
		<div class="container">
			<div class="container">
				<div>
					<br/>
					<table class="table">
						<thread class="thread-dark">
							<tr>
								<th scope="col">Id</th>
								<th scope="col">Evento</th>
								<th scope="col">Email</th>
								<th scope="col">Nombre de la compañía</th>
								<th scope="col">Espacio</th>
								<th scope="col">Estado de la reserva</th>
								<th scope="col" colspan=3></th>
							</tr>
						</thread>
						<tbody>
					
						@foreach($reservas as $reserva)
						<tr>
							<th scope="row">{{ $reserva->id }}</th>
							<td>{{ $reserva->event }}</td>
							<td>{{ $reserva->email }}</td>
							<td>{{ $reserva->company_name }}</td>
							<td>{{ $reserva->space }}</td>
							<td>{{ $reserva->accepted }}</td>
							<td>
								<a class="btn btn-primary" href="{{ url('reservas/' . $reserva->id)}}">Expandir informacion</a> </td>
							</td>
							<td>
								<a href="{{ url('reservas/' . $reserva->id . '/gestion')}}" class="btn btn-warning">Gestionar</a>
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
</x-app-layout>