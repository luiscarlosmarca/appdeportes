@extends('app')
@section('title')
Actualizar Entrenador
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">Editar entrenador: {{ $entrenador->full_name }}</div>
				<div class="panel-body">
				@include('admin.jugadores.partials.error')

			<!-- //amarramos el formulario con el metodo para q carge los valores q le corresponda a dicho
			id, y tambien le mandamos  el id al metodo update -->
			
				{!!Form::model($entrenador,['route'=>['admin.entrenadores.update',$entrenador], 'method' => 'PUT']) !!} 
				
					@include('admin.entrenadores.partials.fields')
		<br>	
		<div class="col-sm-6">
		<button type="submit" class="btn btn-primary">Actualizar entrenador</button>
		
						  {!!Form::close() !!} 
					</div>
						<div class="col-sm-6">
					 @include('admin.entrenadores.partials.delete')
					<br><br>	
			</div>
			<br><br>
	</div>
	<br><br>
</div>
@endsection
