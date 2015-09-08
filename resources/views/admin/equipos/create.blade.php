@extends('app')
@section('title')
Creando nuevo Equipo | Yo Juego
@stop
@section('content')


<!--   Imprime el error de  validacion -->
				@include('admin.jugadores.partials.error')</div>

				<!--   Formulario para crear el jugador -->
					
			<h1>Crear un nuevo equipo</h1>
				@include('admin.equipos.partials.fields')
				 


						<input type="submit" value="Crear equipo" class="register-button">

	{!!Form::close() !!} 	
	</div>	
	<center><img src="http://localhost:8000/img/clubes.png"></center>

   
@endsection
