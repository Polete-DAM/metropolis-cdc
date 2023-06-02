<x-app-layout>
<head>
	<title>Metropolis</title>
	<!-- Agrega los enlaces a los archivos de Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Agrega tus propios estilos CSS -->
	<link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
</head>
<body>
	<!-- Agrega el encabezado del sitio web -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">					
					<li class="nav-item">
					<a class="nav-link" href="{{url('login')}}">Iniciar sesión</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="{{url('register')}}">Registrarse</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="{{url('dashboard')}}">Tu dashboard</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<!-- Agrega el cuerpo del sitio web -->
	<br/>
	<main>
		<div class="container">
			<div class="container">
				<div class="col-md-6">
					<h1>Bienvenido al Circuito de Catalunya</h1>
					<p>Calendario de Reservas</p>
					<p> JUNIO 2023 </p>
				</div>
				<div class="col-md-9">
					<table class="table">
  						<thead>
    						<tr>
      							<th scope="col">SUN</th>
      							<th scope="col">MON</th>
      							<th scope="col">TUE</th>
      							<th scope="col">WED</th>
      							<th scope="col">THU</t>
      							<th scope="col">FRI</th>
      							<th scope="col">SAT</th>
   							 </tr>
  						</thead>
 					 	<tbody>
    						<tr>
      							<td>28</td>
      							<td>29</td>
      							<td>30</td>
      							<td>31</td>
      							<td>1</td>
      							<td>2</td>
      							<td>3</td>
    						</tr>
    						<tr>
      							<td>4</td>
      							<td>5</td>
      							<td>6</td>
      							<td>7</td>
      							<td>8</td>
      							<td>9</td>
      							<td>10</td>
      							    						
      						</tr>
    						<tr>
      							<td>4</td>
      							<td>5</td>
      							<td>6</td>
      							<td>7</td>
      							<td>8</td>
      							<td>9</td>
      							<td>10</td>
      							
    						</tr>
    						<tr>
      							<td>11</td>
      							<td>12</td>
      							<td>13</td>
      							<td>14</td>
      							<td>15</td>
      							<td>16</td>
      							<td>17</td>
      					
    						</tr>
    						<tr>
      							<td>18</td>
      							<td>19</td>
      							<td>20</td>
      							<td>21</td>
      							<td>22</td>
      							<td>23</td>
      							<td>24</td>
    						</tr>
    						<tr>
      							<td>25</td>
      							<td>26</td>
      							<td>27</td>
      							<td>28</td>
      							<td>29</td>
      							<td>30</td>
      							
    						</tr>
    						
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