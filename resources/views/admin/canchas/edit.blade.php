@extends('app')
@section('title')
Actualizar Escenario deportivo
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Escenario deportivo: {{ $cancha->nombre }}</div>
				<div class="panel-body">
				@include('admin.jugadores.partials.error')

			<!-- //amarramos el formulario con el metodo para q carge los valores q le corresponda a dicho
			id, y tambien le mandamos  el id al metodo update -->
			
				{!!Form::model($cancha,['route'=>['admin.escenarios_deportivos.update',$cancha], 'method' => 'PUT']) !!} 
				
					@include('admin.canchas.partials.fields2')
		
						 
			<div class="col-sm-6">
		<button type="submit" class="btn btn-primary">Actualizar escenario deportivo</button>
		
						  {!!Form::close() !!} 
					</div>
						<div class="col-sm-6">
					 @include('admin.canchas.partials.delete')
					<br><br>	
			</div>
			<br><br>

	</div>
	<center><img src="http://localhost:8000/img/deportes.png"></center>
</div>
@endsection