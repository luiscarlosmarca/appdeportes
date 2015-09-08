
@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-20">
			<div class="panel panel-default">
				<div class="panel panel-primary">
      <div class="panel-heading">
        <h1 class="panel-title">Listado de Jugadores</h1>
      </div>


      <div class="panel-body">

@if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif

       @include('admin.jugadores.partials.search') 

       @include('admin.jugadores.partials.table')
      </div>
    </div>

			</div>
			<p>
		
			
		
 							<font color="white">
		Tenemos 
 						{{$jugadores->total()}}
 						Jugadores
 						<br>
 						
 						</p>
		</div>
	</div>
</div>



@endsection
