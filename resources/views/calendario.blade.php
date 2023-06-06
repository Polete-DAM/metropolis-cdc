<x-app-layout>
<head>
	<title>Calendario de eventos</title>
	<!-- Agrega los enlaces a los archivos de Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Agrega tus propios estilos CSS -->
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
	<!-- Agrega el encabezado del sitio web -->
	<header>
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Calendario') }}
        </h2>
    </x-slot>
	</header>

	<!-- Agrega el cuerpo del sitio web -->
	<main>
		<br/>
		<div class="container">
			<div class="container">
				<div class="col-md-15" style="text-align: center;">
					<p>Calendario de Reservas</p>
					<p> JUNIO 2023 </p>
				</div>
				<div class="col-md-15">
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
      							<td><a href="https://www.circuitcat.com/ca/esdeveniments/ccm-cmv-ca/">17</a></td>
      					
    						</tr>
    						<tr>
      							<td><a href="https://www.circuitcat.com/ca/esdeveniments/ccm-cmv-ca/">18</a></td>
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
      							<td><a href="https://www.circuitcat.com/ca/esdeveniments/24-horas-de-catalunya-de-motociclismo-ca/">30</a></td>
      							<td><a href="https://www.circuitcat.com/ca/esdeveniments/24-horas-de-catalunya-de-motociclismo-ca/">1</a></td>
    						</tr>
    						
  						</tbody>
					</table>
    				
				</div>
			</div>
		</div>
		<br/>
		<br/>
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
</x-app-layout>