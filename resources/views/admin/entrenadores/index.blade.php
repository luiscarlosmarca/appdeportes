@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-15">
			<div class="panel panel-default">
				<div class="panel panel-primary">
      <div class="panel-heading">


        <h1 class="panel-title">Listado de Entrenadores</h1>
      </div>

      				@if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif
      <div class="panel-body">
	   @include('admin.entrenadores.partials.search')

       @include('admin.entrenadores.partials.table')
      </div>
    </div>
			</div>
			
			<p>
 					<font color="white">
		Tenemos 
 						{{$entrenadores->total()}}
 						Entrenadores
 						
 						</p>
		</div>
	</div>
</div>



@endsection
