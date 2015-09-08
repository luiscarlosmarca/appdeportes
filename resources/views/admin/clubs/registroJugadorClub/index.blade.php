@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			
   
				<div class="panel-body">
				
					@include('admin.clubs.registroJugadorClub.partials.fields')
					
				</div>
@include('admin.clubs.registroJugadorClub.partials.search')
		<br></div><br>
		   @if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif

	@include('admin.jugadores.partials.error')
					<div class="panel panel-primary">
			<div class="panel-heading">


        <h3 class="panel-title">Listados de jugadores registrados </h3>
      </div>
					@include('admin.clubs.registroJugadorClub.partials.table')

			</div>
			
			


			<p>
 							Hay
 						{{$registroJugadorClubs->total()}}
 						Registros
 						<br>
 							
 						</p>
		</div>
	</div>
</div>
@endsection
