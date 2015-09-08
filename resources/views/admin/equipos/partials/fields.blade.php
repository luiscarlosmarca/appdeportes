
		 	
  <div class="register">
{!!Form::open(['route'=>'admin.equipos.store', 'method' => 'POST']) !!} 

{{--nombre --}}


		
							{!!Form::label('nombre', 'Nombre') !!}
					   		{!!Form::text('nombre',null,['class'=>'register-input','placeholder' => 'Escriba el nombre del equipo	','requiered']) !!}

		 
{{--nombre capitan --}}


	
							{!!Form::label('capitan', 'Id del Capitan del equipo') !!}
					   		{!!Form::text('jugador_id',null,['class'=>'register-input','placeholder' => 'Escriba el id del Capitan del equipo	','requiered']) !!}

		


{{-- Disciplina--}}			
		
						    {!!Form::label('Disciplina', 'Disciplina')  !!}
					  		{!!Form::select('disciplina',config('disciplina.disciplina'), null, ['class'=>'form-control']) !!}

			
{{--Categoria--}}			
		

						    {!!Form::label('Categoria', 'Categoria')  !!}
					  		{!!Form::select('categoria',config('categoria.categoria'), null, ['class'=>'form-control']) !!}

			

{{--observaciones--}}


							{!!Form::label('observaciones', 'Observaciones') !!}
					   		{!!Form::textarea('observaciones',null,['class'=>'register-input','placeholder' => 'Escriba las Observaciones','requiered']) !!}



	