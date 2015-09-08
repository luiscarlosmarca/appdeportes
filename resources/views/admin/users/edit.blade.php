@extends('app')
@section('title')
Actualizar Usuario
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar usuario: {{$user->name}}</div>
				<div class="panel-body">
				@include('admin.users.partials.messages')
				{!!Form::model($user,['route'=>['admin.users.update',$user], 'method' => 'PUT']) !!} 
				
					@include('admin.users.partials.fields')
		
						  <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
						  {!!Form::close() !!} <br>
			
			</div>
							@include('admin.users.partials.delete')
		</div>
			</div>
	</div>
</div>
@endsection
