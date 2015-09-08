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

			<!-- //amarramos el formulario con el metodo para q carge los valores q le corresponda a dicho
			id, y tambien le mandamos  el id al metodo update -->
			
				{!!Form::model($jugador,['route'=>['admin.jugadores.update',$jugador], 'method' => 'PUT']) !!} 
				
					@include('admin.jugadores.partials.fields')
			{!!Form::hidden('nombre_edicion' ,{{ Auth::user()->name }}	) !!}
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
