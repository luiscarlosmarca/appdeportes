@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-18">
				<div class="panel panel-primary">
			<div class="panel-heading">
        <h3 class="panel-title">Listados de equipos </h3>
      </div>

	@if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif
				<div class="panel-body">
					@include('admin.equipos.partials.search')
				 @include('admin.equipos.partials.table') 
				</div>
			</div>
		</div>
		

			<p>
 							
 							<font color="white">
		Tenemos 
 			
 						{{$equipos->total()}}
 						Equipos
 						
 						</p>
	</div>
	 
</div>
@endsection
