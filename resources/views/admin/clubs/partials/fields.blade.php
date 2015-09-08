
 					  <div class="register">



	{!!Form::open(['route'=>'admin.clubs.store', 'method' => 'POST']) !!} 


{{-- Nombre --}}

							{!!Form::label('nombre', 'Nombre') !!}
					   		{!!Form::text('nombre',null,['class'=>'register-input','placeholder' => 'Escriba su nombre','requiered']) !!}
	 {{-- nit --}}

							{!!Form::label('nit', 'Nit') !!}
						{!!Form::text('nit' ,null,['class'=>'register-input','placeholder' => 'Escriba el nit','requiered']) !!}

		 

		 {{-- telefono --}}

						{!!Form::label('telefono', 'Telefono') !!}
						{!!Form::text('telefono' ,null,['class'=>'register-input','placeholder' => 'Escriba su telefóno','requiered']) !!}


{{-- Direccion --}}

						{!!Form::label('Direccion', 'Dirección') !!}
						{!!Form::text('direccion',null,['class'=>'register-input','placeholder' => 'Escriba su dirección','requiered']) !!}
			


{{-- Disciplina--}}			
	
						    {!!Form::label('Disciplina', 'Disciplina')  !!}
					  		{!!Form::select('disciplina',config('disciplina.disciplina'), null, ['class'=>'register-input']) !!}

{{--Categoria--}}			
		

						    {!!Form::label('Categoria', 'Categoria')  !!}
					  		{!!Form::select('categoria',config('categoria.categoria'), null, ['class'=>'register-input']) !!}

				  


 
{{-- id Dtecnico --}}
	
							{!!Form::label('nombre', 'Id Dtecnico') !!}
					   		{!!Form::text('Dtecnico_id',null,['class'=>'register-input','placeholder' => 'Escriba el id del Dtecnico','requiered']) !!}


{{-- id asistente tecnico --}}
	
							{!!Form::label('nombre', 'Id Asistente Tecnico') !!}
					   		{!!Form::text('asistenteTecnico_id',null,['class'=>'register-input','placeholder' => 'Escriba el id del asistente tecnico','requiered']) !!}

{{-- id utileero --}}
	
							{!!Form::label('nombre', 'Id Utilero') !!}
					   		{!!Form::text('utilero_id',null,['class'=>'register-input','placeholder' => 'Escriba el id del Utilero','requiered']) !!}


{{-- id Dtecnico --}}
	
							{!!Form::label('nombre', 'Id delegado') !!}
					   		{!!Form::text('delegado_id',null,['class'=>'register-input','placeholder' => 'Escriba el id del delegado','requiered']) !!}



{{-- id Dtecnico --}}
	
							{!!Form::label('nombre', 'Id delegado suplente') !!}
					   		{!!Form::text('delegadoSuplente_id',null,['class'=>'register-input','placeholder' => 'Escriba el id del delegado  suplente','requiered']) !!}



{{-- id Dtecnico --}}
	
							{!!Form::label('nombre', 'Id Preparador fisico') !!}
					   		{!!Form::text('preparadorFisico_id',null,['class'=>'register-input','placeholder' => 'Escriba el id del Preparador fisico','requiered']) !!}



{{-- id Dtecnico --}}
	
							{!!Form::label('nombre', 'Id Medico') !!}
					   		{!!Form::text('medico_id',null,['class'=>'register-input','placeholder' => 'Escriba el id del medico','requiered']) !!}



{{-- id Dtecnico --}}
	
							{!!Form::label('nombre', 'Id Medico auxiliar') !!}
					   		{!!Form::text('medicoAuxiliar_id',null,['class'=>'register-input','placeholder' => 'Escriba el id del medico auxiliar','requiered']) !!}



{{-- id Dtecnico --}}
	
							{!!Form::label('nombre', 'Id kinesiologo ') !!}
					   		{!!Form::text('kinesiologo_id',null,['class'=>'register-input','placeholder' => 'Escriba el id del kinesiologo 	','requiered']) !!}



{{-- observacion  --}}

    					{!!Form::label('observaciones', 'Observaciones') !!}
						{!!Form::textarea('observaciones',null,['class'=>'register-input','placeholder' => ' Escriba alguna nota u observación','requiered']) !!}

	
	

