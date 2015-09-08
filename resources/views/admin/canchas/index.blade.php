@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-primary">
				<div class="panel-heading">Escenarios deportivos	</div>
@if (Session::has('message'))

					<p class="alert alert-info"> {{Session::get('message') }}</p>

					@endif
				<div class="panel-body">
					@include('admin.canchas.partials.search')
						@include('admin.canchas.partials.table')
				</div>
			</div>
		
		</div>

			<p>
 						
 						</p>
	</div>
		<font color="white">
		Tenemos 
 					{{$canchas->total()}} 
 					Escenarios deportivos
 			</font>	


</div>
 
@endsection

 

