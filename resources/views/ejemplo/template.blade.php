@extends('ejemplo.layout')

@section('title')
Curso laravel basico
@stop

@section('contenido')
		<p>
			<h1>
				Template laravel
			</h1>	
		</p>

		<p>
			
		@if (isset ($user))
				hello world {{$user}}
			@else:	
				[login]
		@endif;	
			</p>

		<hr>

@stop


@section('footer')
	Derechos reservados 2015
@stop


