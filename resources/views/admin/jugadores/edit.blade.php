@extends('app')
@section('title')
Actualizar Jugador
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Jugador: {{ $jugador->full_name }}</div>
				<div class="panel-body">
				@include('admin.jugadores.partials.error')

			
				{!!Form::model($jugador,['route'=>['admin.jugadores.update',$jugador], 'method' => 'PUT']) !!} 
				
					@include('admin.jugadores.partials.fields')

				
				<div class="col-sm-6">
						 
					<button type="submit" class="btn btn-primary">Actualizar jugador</button>
						
					 {!!Form::close() !!} 

			
				</div>
			  @include('admin.jugadores.partials.delete')
			</div>			
			</div>
	</div>
</div>
@endsection
