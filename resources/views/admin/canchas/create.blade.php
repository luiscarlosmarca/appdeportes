	@extends('app')
@section('title')
Creando un nuevo Escenario deportivo | Yo Juego
@stop


@section('content')
	@include('admin.jugadores.partials.error')

	

      
        <h1>Crear un nuevo Escenario deportivo  </h1>
<!--   Imprime el error de  validacion -->
			
            
            

 	
			
          <form method="POST" action="/canchas/up" accept-charset="UTF-8" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
				@include('admin.canchas.partials.fields2')
			

	<input type="submit" value="Crear Escenario deportivo" class="register-button">

	</form>

					<!-- {!!Form::open(['route'=>'admin.escenarios_deportivos.show', 'method' => 'POST'],['class'=>'register']) !!} 

		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		{!!Form::label('Agregar imagen', 'Agregar Imagen') !!}	
	     <input type="file" class="register-input" name="imagen" >	
	     <input type="submit" value="subir" class="register-button">
	{!!Form::close() !!} --> 
	</div>	
	<center><img src="http://localhost:8000/img/clubes.png"></center>	 
	


@endsection

