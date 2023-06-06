<!DOCTYPE html>
<html>
<head>
	<title>Panel de usuario</title>
	<!-- Agrega los enlaces a los archivos de Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Agrega tus propios estilos CSS -->
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
	<!-- Agrega el encabezado del sitio web -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">					
				</ul>
			</div>
		</nav>
	</header>

	<!-- Agrega el cuerpo del sitio web -->
	<main>
		<div class="container">
			<div class="container">
				<div class="col-md-15">
					<div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
							<a href="{{ url('calendario') }}" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
								<div>
									<div class="flex">
										<img width=50 src="{{asset('/images/IconCal.png')}}">
									</div>

									<h2 style="padding-right: 20px;" class="mt-6 text-xl font-semibold text-gray-900">Mira el calendario de eventos</h2>

									<p class="mt-4 text-gray-500 text-sm leading-relaxed">
										Mantén un control de los eventos planeados para los próximos días.
									</p>
								</div>

								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
									<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
								</svg>
							</a>

							<a href="{{ url('espacios') }}" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
								<div>
									<div class="flex">
										<img width=100 src="{{asset('/images/LogoHospitality.png')}}">
									</div>

									<h2 class="mt-6 text-xl font-semibold text-gray-900">Gestor de espacios</h2>

									<p class="mt-4 text-gray-500 text-sm leading-relaxed">
										Mantén un control de los espacios del Circuit.										
									</p>
								</div>

								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
									<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
								</svg>
							</a>

							<a href="{{ url('reservas') }}" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
								<div>
									<div class="flex">
										<img width=75 src="{{asset('/images/IconRes.png')}}">
									</div>
										<br/>
									<h2 class="mt-6 text-xl font-semibold text-gray-900">Gestor de reservas</h2>
									<p class="mt-4 text-gray-500 text-sm leading-relaxed">
										Controla el registro de reservas de los clientes del Circuit.
									</p>
								</div>

								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
									<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
								</svg>
							</a>

							<a href="https://www.circuitcat.com/ca/" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="flex">
                                    <img width=100 src="{{asset('/images/RaceCircuitCatalunya.png')}}">
                                </div>

                                <h2 style="padding-right: 20px;" class="mt-6 text-xl font-semibold text-gray-900">Visita el Circuit</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    ¡Revisa todos los nuevos eventos disponibles que están por venir al Circuit de Catalunya!
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>
						</div>
				</div>
			</div>
		</div>
		<br/>
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