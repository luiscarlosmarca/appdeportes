@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-18">
			<div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Listado de Clubs </h3>
      </div>

	@if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif

				<div class="panel-body">
				@include('admin.clubs.partials.search')
				@include('admin.clubs.partials.table')
				
				</div>
			</div>
		</div>

		
	</div>

 							<font color="white">
		Tenemos 
 						{{$clubs->total()}}
 					Clubs
</div>
@endsection
