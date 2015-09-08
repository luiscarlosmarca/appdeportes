	@extends('app')
@section('title')
Registrar jugadores en Club | Yo Juego
@stop
@section('content')


	<div class="panel panel-warning">
      <div class="panel-heading">
        <h1 class="panel-title">Registrar Jugador</h3>
<!--   Imprime el error de  validacion -->
				@include('admin.jugadores.partials.error')

				<!--   Formulario para crear el jugador -->
					{!!Form::open(['route'=>'admin.registro_jugador_clubs.store', 'method' => 'POST']) !!} 
				
				@include('admin.clubs.registroJugadorClub.partials.fields')
			
			
						  {!!Form::close() !!} 	

		
		    
@endsection
