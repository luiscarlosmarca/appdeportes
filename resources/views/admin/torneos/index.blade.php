@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-15">
			<div class="panel panel-primary">
				<div class="panel-heading">Listado de nuestros Torneos</div>
	
	@if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>
		@endif
				<div class="panel-body">
					@include('admin.torneos.partials.search')
					@include('admin.torneos.partials.table')
				</div>
			</div>
		</div>


		
			<p>
 							Hay
 						{{$torneos->total()}}
 					Torneos registrados
 						<br>
 						
 						</p>
	</div>
</div>
@endsection
