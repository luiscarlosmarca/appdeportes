  <div class="register">
{!!Form::open(['route'=>'admin.torneos.store', 'method' => 'POST']) !!} 

		 {{-- Nombre --}}

							{!!Form::label('nombre', 'Nombre') !!}
					   		{!!Form::text('nombre',null,['class'=>'register-input','placeholder' => 'Escriba el nombre del torneo','requiered']) !!}
  

		
{{-- Disciplina--}}			
		
						    {!!Form::label('Disciplina', 'Disciplina')  !!}
					  		{!!Form::select('disciplina',config('disciplina.disciplina'), null, ['class'=>'register-input']) !!}

		 	
{{--Categoria--}}			
		

						    {!!Form::label('Categoria', 'Categoria')  !!}
					  		{!!Form::select('categoria',config('categoria.categoria'), null, ['class'=>'register-input']) !!}

		 	
{{-- fecha de inicio--}}

    					{!!Form::label('feNa', 'Fecha de inicio') !!}
						{!!Form::date('Fecha_inicio',null,['class'=>'register-input','placeholder' => ' Escriba su fecha de inicio aaaa-mm-dd','requiered']) !!}

	


																

{{-- observaciones --}}

 
						{!!Form::label('Observaciones', 'Observaciones') !!}
						{!!Form::textarea('observaciones' ,null,['class'=>'register-input','placeholder' => 'Escriba las observaciones' ]) !!}
 
 
	