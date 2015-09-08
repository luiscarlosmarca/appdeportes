	@extends('app')
@section('title')
Creando nuevo Entrenador | Yo Juego
@stop
@section('content')


     
<!--   Imprime el error de  validacion -->
				@include('admin.jugadores.partials.error')
				        <h1>Crear un nuevo entrenador</h1>

				<!--   Formulario para crear el jugador -->
				
				@include('admin.entrenadores.partials.fields')
			
			 <input type="submit" value="Crear entrenador" class="register-button">

	{!!Form::close() !!} 	
	</div>	
	<center><img src="http://localhost:8000/img/fondo.png"></center>
			
					

		
		    
@endsection
