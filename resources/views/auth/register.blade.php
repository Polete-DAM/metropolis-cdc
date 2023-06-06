<x-guest-layout>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrarse</title>
	<!-- Enlace a Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="{{url('')}}">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="{{url('login')}}">Iniciar Sesión</a>
					</li>
				</ul>
			</div>
		</nav>
		<br/>
		<div class="container">
        <div style="margin: 0px 0px -10px 400px">
				<img width=300 src="{{asset('/images/Logo.jpg')}}" href="{{ route('dashboard') }}"/>
			</div>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<br/>
				<h2 class="text-center mb-4">Registro de usuario</h2>
				<form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Nombre') }}" />
                <x-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')"  placeholder="Ingresa un nombre de usuario" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Correo electrónico') }}" />
                <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')"  placeholder="Ingresa un correo electrónico" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full form-control" type="password" name="password"  placeholder="Ingresa una contraseña" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full form-control" type="password" name="password_confirmation"  placeholder="Confirma tu contraseña" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('Estoy de acuerdo con los :terminos_de_servicio y :politica_de_privacidad', [
                                        'terminos_de_servicio' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terminos de Servicio').'</a>',
                                        'politica_de_privacidad' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Politica de Privacidad').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('¿Ya estás registrado?') }}
                </a>

                <x-button class="btn btn-danger btn-block">
                    {{ __('Registrate') }}
                </x-button>
            </div>
        </form>

			</div>
		</div>
	</div>




	<!-- Importar jQuery, Popper.js y Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</x-guest-layout>