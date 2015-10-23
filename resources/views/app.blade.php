s<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title','Yo Juego| Haciendo la diferencia')</title>

	{!!Html::style('css/app.css')!!}
	{!!Html::style('css/regstyle.css')!!}
	<!--<link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}">Yo Juego </a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/web/index.php') }}">Star Game</a></li>
					

					<!-- ******Jugador ******-->
					<li class="dropdown"><a aria-expanded="true" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Jugador <span class="caret"></span></a>
						<ul class="dropdown-menu">
			                <li><a href="{{ route('admin.jugadores.create') }}">Crear Nuevo Jugador </a></li>
							<li><a href="{{ url('/admin/jugadores') }}">Ver Listado de Jugadores</a></li>
			             </ul>

					</li>
					<!-- ******Entrenador ******-->

					<li class="dropdown"><a aria-expanded="true" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Entrenador <span class="caret"></span></a>
						<ul class="dropdown-menu">
			                <li><a href="{{ route('admin.entrenadores.create') }}">Crear Nuevo Entrenador </a></li>
							<li><a href="{{ url('/admin/entrenadores') }}">Ver Listado de Entrenadores</a></li>
			             </ul>

					</li>
					<!-- ******Clubs ******-->
				
					<li class="dropdown"> <a aria-expanded="true" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Clubs <span class="caret"></span></a>
			              <ul class="dropdown-menu">
			                <li><a href="{{ route('admin.clubs.create') }}">Crear un nuevo club</a></li>
<!-- 			             /// <li><a href="{{ route('admin.registro_jugador_clubs.create')}}">Registrar Jugador </a></li>
 -->			                <li><a href="{{ url('/admin/clubs') }}">Listado de clubs </a></li>
							<li><a href="{{ url('/admin/registro_jugador_clubs') }}">Listados Jugadores registrados </a></li>
			             
			              </ul>
          		  </li>
	<!-- ******equipos******-->
          		  <li class="dropdown"> <a aria-expanded="true" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Equipos <span class="caret"></span></a>
			              <ul class="dropdown-menu">
			              	<li><a href="{{ route('admin.equipos.create') }}">Crear un nuevo equipo</a></li>
<!-- 			                <li><a href="{{ route('admin.registro_jugador_equipos.create')}}">Registrar Jugador </a></li>
g   -->			                <li><a href="{{ url('/admin/equipos') }}">Listado de equipos</a></li>
							<li><a href="{{ url('/admin/registro_jugador_equipos') }}">Jugadores en los equipos</a></li>
			              </ul>
            		</li>
          <!-- ******torneos******-->
					<li class="dropdown"> <a aria-expanded="true" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Torneos <span class="caret"></span></a>
			              <ul class="dropdown-menu">
			              	<li><a href="{{ route('admin.torneos.create') }}">Crear un nuevo torneo</a></li>
<!-- 			                <li><a href="{{ route('admin.torneos.show')}}">Registrar equipos </a></li>
 -->			                <li><a href="{{ url('/admin/torneos') }}">Listado de torneos</a></li>
	<!-- 							<li><a href="{{ url('#') }}">Equipos registrados</a></li>
 -->			              </ul>
            		</li>

 			<!-- ******escenarios deportivos******-->
					<li class="dropdown"> <a aria-expanded="true" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Escenarios Deportivos <span class="caret"></span></a>
			              <ul class="dropdown-menu">
			              	<li><a href="{{ route('admin.escenarios_deportivos.create') }}">Crear un nuevo escenario deportivo</a></li>
			               
			                <li><a href="{{ url('/admin/escenarios_deportivos') }}">Listado de escenarios deportiivos</a></li>
							
			              </ul>
            		</li>

					<li><a href="{{ url('/') }}">Fechas</a></li>
					<li><a href="{{ url('/') }}">Resultados</a></li>
					<li><a href="{{ url('/') }}">Ajustes</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Iniciar Sección</a></li>
						<!-- <li><a href="{{ url('/auth/register') }}">Register</a></li> -->
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Cerrar sección</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')


	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	 <!-- Javascript -->
        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
</body>
</html>
