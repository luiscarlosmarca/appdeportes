	@extends('app')
@section('title')
Registrar jugadores en Equipo | Yo Juego
@stop
@section('content')


	<div class="panel panel-warning">
      <div class="panel-heading">
        <h1 class="panel-title">Registrar Jugador</h3>
<!--   Imprime el error de  validacion -->
				@include('admin.jugadores.partials.error')

				<!--   Formulario para crear el jugador -->
					
		
		    
@endsection
