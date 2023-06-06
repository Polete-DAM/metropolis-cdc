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
            {{ __('Gestor de reservas') }}
        </h2>
    </x-slot>
	<br/>
        <div class="container">
            <div class="container">
                <div class="col-md-15">
                    <h2> Gestión de la reserva {{ $reserva->id }} </h2>
                    <table class="table">
                        <thread class="thread-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Evento</th>
                                <th scope="col">Email</th>
                                <th scope="col">Nombre de la compañía</th>
                                <th scope="col">Espacio</th>
                                <th scope="col" colspan=3></th>
                            </tr>
                        </thread>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $reserva->id }}</th>
                                <td>{{ $reserva->event }}</td>
                                <td>{{ $reserva->email }}</td>
                                <td>{{ $reserva->company_name }}</td>
                                <td>{{ $reserva->space }}</td>
                                <td>
                            </tr>
                        </tbody>
                    </table>
                    <br />
                    <table class="table">
                        <thread class="thread-dark">
                            <br />
                            <tr>
                                <th scope="col">Fecha inicial</th>
                                <th scope="col">Fecha final</th>
                                <th scope="col">Nº asistentes</th>
                                <th scope="col">Pase de bus</th>
                                <th scope="col">Pase de staff</th>
                                <th scope="col">Pase de aparcamiento</th>
                                <th scope="col">Estado reserva</th>
                                <th scope="col" colspan=3></th>
                            </tr>
                        </thread>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $reserva->start_date }}</th>
                                <td>{{ $reserva->end_date }}</td>
                                <td>{{ $reserva->n_attendees }}</td>
                                <td>{{ $reserva->n_bus_pass }}</td>
                                <td>{{ $reserva->n_staff_pass }}</td>
                                <td>{{ $reserva->n_parking_pass }}</td>
                                <td>{{ $reserva->accepted }}</td>
                                <td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-md-5">
                        <table class="table">
                            <form action='/reservas/{{ $reserva->id }}' method='POST'>
                                @csrf
                                @method('put')
                                <input type="hidden" name="accepted" id="accepted" value="Aceptada">
                                <Button type="Submit" class="btn btn-success m">Aceptar</Button>
                            </form>
                            <form action='/reservas/{{ $reserva->id }}' method='POST'>
                                @csrf
                                @method('put')
                                <input type="hidden" name="accepted" id="accepted" value="Denegada">
                                <Button type="Submit" class="btn btn-danger mx-2">Denegar</Button>
                            </form>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>



    </main>
    <!-- Agrega el pie de página del sitio web -->
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
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
