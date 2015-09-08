@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-primary">
			<div class="panel-heading">
        <h3 class="panel-title">Registro de jugadores en los equipos </h3>
      </div>

       @if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif

				<div class="panel-body">
					@include('admin.equipos.registroJugadorEquipo.partials.fields')
					@include('admin.equipos.registroJugadorEquipo.partials.search')
					@include('admin.equipos.registroJugadorEquipo.partials.table')
				</div>
				

			<p>
 									<font color="white">
		Tenemos 
 						{{$registroJugadorEquipos->total()}}
 						Registros de jugadores
 						<br>
 						
 						</p>
			</div>
			
		</div>
		
	</div>
</div>
@endsection
