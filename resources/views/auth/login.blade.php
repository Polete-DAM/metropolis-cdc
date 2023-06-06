<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesión</title>
	<!-- Agrega los enlaces a los estilos de Bootstrap o a tus propios estilos CSS -->
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
					<a class="nav-link" href="{{url('register')}}">Registrarse</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	@if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
		<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-6">
				<div style="text-align: center;">
					<img width=300 src="{{asset('/images/Logo.jpg')}}" href="{{ route('dashboard') }}"/>
				</div>
				<br/>
			<h2 class="text-center mb-4">Iniciar sesión</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Ingresa tu correo electrónico" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="current-password" placeholder="Ingresa tu contraseña" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
				<a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraeña?') }}
                    </a>
					<br/>
                @endif

                <x-button style="bgcolor = red;" class="btn btn-block">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
		</div>
		</div>
	</div>

	<!-- Agrega los scripts de Bootstrap si es necesario -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.3/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>