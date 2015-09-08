@extends('app')
@section('title')
Actualizar Torneo
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Torneo: {{ $torneo->nombre }}</div>
				<div class="panel-body">
				@include('admin.jugadores.partials.error')

			<!-- //amarramos el formulario con el metodo para q carge los valores q le corresponda a dicho
			id, y tambien le mandamos  el id al metodo update -->
			
				{!!Form::model($torneo,['route'=>['admin.torneos.update',$torneo], 'method' => 'PUT']) !!} 
				
					@include('admin.torneos.partials.fields')
		
						 
				<div class="col-sm-6">
		<button type="submit" class="btn btn-primary">Actualizar torneo</button>
		
						  {!!Form::close() !!} 
					</div>
						<div class="col-sm-6">
					 @include('admin.torneos.partials.delete')
					<br><br>	
			</div>
			<br><br>

	</div>
	<center><img src="http://localhost:8000/img/deportes.png"></center>
</div>
@endsection