  <div class="register">
{!!Form::open(['route'=>'admin.registro_jugador_clubs.store', 'method' => 'POST']) !!} 
<div class="col-sm-6">
		
		{{--id jugador --}}
		<div class="form-group">

				<br>
									{!!Form::label('jugador_id', 'El Id del Jugador ') !!}
							   		{!!Form::text('jugador_id',null,['class'=>'form-control floating-label','placeholder' => 'Escriba el id del jugador','requiered']) !!}
 			</div>
		 

	
</div>

<div class="col-sm-6">			  

	{{-- id club --}}
	<div class="form-group"><br>	
								{!!Form::label('club_id', 'El Id del club') !!}
						   		{!!Form::text('club_id',null,['class'=>'form-control floating-label','placeholder' => 'Escriba el id del Club','requiered']) !!}
	</div>
</div>
	<div class="col-sm-12">
	
{{-- botones --}}

  <br>
 <div class="form-group">
						{!! Form::button('Registrar Jugador',['type'=>'submit','class'=>'btn btn-success btn-lg btn-block'])!!} 
</div>