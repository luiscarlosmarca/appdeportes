	@extends('app')
@section('title')
Creando nuevo Club | Yo Juego
@stop
@section('content')




        
<!--   Imprime el error de  validacion -->
				@include('admin.jugadores.partials.error')

				<!--   Formulario para crear el jugador -->
					<h1>Crear un nuevo Club</h1>

				
				@include('admin.clubs.partials.fields')
			
			<input type="submit" value="Crear club" class="register-button">

	{!!Form::close() !!} 	
	</div>	
	<center><img src="http://localhost:8000/img/clubes.png"></center>

		
		    
@endsection
