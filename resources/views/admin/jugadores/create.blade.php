@extends('app')
@section('title')
Creando nuevo Jugador | Yo Juego
@stop
@section('content')

	

      
<!--   Imprime el error de  validacion -->
@include('admin.jugadores.partials.error')

  	<h1>Crear un nuevo Jugador</h3>
				<!--   Formulario para crear el jugador -->
			
					
				@include('admin.jugadores.partials.fields')

				<input name="invisible" type="hidden" value=$nombre>
		
				 <input type="submit" value="Crear jugador" class="register-button">

	{!!Form::close() !!} 	
	</div>	
	<center><img src="http://localhost:8000/img/fondo.png"></center>
			
					
					    
@endsection
	

						

 
		
		    
