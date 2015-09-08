@extends('app')
@section('title')
Listado de Usuarios
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios</div>
					@if (Session::has('message'))

					<p class="alert alert-success"> {{Session::get('message') }}</p>

					@endif

				<div class="panel-body">

					

						{!!Form::model(Request::all(),['route'=> 'admin.users.index', 'method' => 'GET', 'class'=> 'navbar-form navbar-lef pull-right','role'=>'search']) !!}

						  <div class="form-group">
						    
						     {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Escriiba aquí'])!!}
						  	{!!Form::select('tipo',config('options.tipo'),null,['class'=>'form-control'])!!}
						  </div>
						  <button type="submit" class="btn btn-default">Buscar</button>

					{!!Form::close()!!}


					<p>
						
						<a class="btn btn-info" href="{{route('admin.users.create')}}" role="button">Crear Usuario</a>
					</p>
						@include('admin.users.partials.table');

 						{!!$users->appends(Request::only(['name','tipo']))->render()!!}
 						<p>
 							Hay
 						{{$users->total()}}
 						Usuarios
 						<br>
 						En esta Pagina puede ver
 						{{$users->count()}}
 						Usuarios	
 						</p>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
