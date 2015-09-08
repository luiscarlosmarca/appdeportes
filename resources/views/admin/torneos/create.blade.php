	@extends('app')
@section('title')
Creando nuevo Torneo | Yo Juego
@stop
@section('content')

	@include('admin.jugadores.partials.error')

        <h1>Crear un nuevo torneo </h1>
<!--   Imprime el error de  validacion -->
			

				<!--   Formulario para crear el jugador -->
					
				
				@include('admin.torneos.partials.fields')
			<input type="submit" value="Crear torneo" class="register-button">

	{!!Form::close() !!} 	
	</div>	
	<center><img src="http://localhost:8000/img/clubes.png"></center>
			
		
		    
@endsection
