 	
  <div class="register">
	{!!Form::open(['route'=>'admin.jugadores.store', 'method' => 'POST']) !!} 
			
			
			{!!Form::label('num_doc', 'Tipo de Documento') !!}
		 	{!!Form::select('tipo_doc',['Seleccione su documento de identidad','Cedula'=>'Cedula','Tarjeta de identidad'=>'Tarjeta de identidad','Registro Civill'=>'Registro civil','Pasaporte'=>'Pasaporte'], null, ['class'=>'register-input']) !!}
			
			{!!Form::label('num_doc', 'Numero de Documento') !!}
			{!!Form::text('num_doc',null,['class'=>'register-input','placeholder' => 'Escriba su numero de identiificación civil','requiered']) !!}
		    
			{!!Form::label('num_doc', 'Nommbre') !!}
		    {!!Form::text('nombre',null,['class'=>'register-input','placeholder' => 'Escriba su nombre','requiered']) !!}
	   		
			{!!Form::label('num_doc', 'Apellido') !!}
	   		{!!Form::text('apellido',null,['class'=>'register-input','placeholder' => 'Escriba su apellido','requiered']) !!}
			
			{!!Form::label('num_doc', 'Telefono') !!}
			{!!Form::text('telefono' ,null,['class'=>'register-input','placeholder' => 'Escriba su telefóno','requiered']) !!}
			
			{!!Form::label('num_doc', 'Dirección') !!}
			{!!Form::text('direccion',null,['class'=>'register-input','placeholder' => 'Escriba su dirección','requiered']) !!}
			
			{!!Form::label('num_doc', 'Correo electronico') !!}
			{!!Form::text('email',null,['class'=>'register-input','placeholder' => ' Escriba su Correo electronico','requiered']) !!}

			{!!Form::label('num_doc', 'Fecha de nacimiento') !!}
			{!!Form::date('FeNa',null,['class'=>'register-input','placeholder' => ' Escriba su fecha de nacimiento aaaa-mm-dd','requiered']) !!}
									
 			<div class="register-switch">
				{!!Form::label('sisben', '¿Tiene Sisben?') !!}
				si	{!!Form::radio('sisben',1)!!} | No	{!!Form::radio('sisben',2)!!}
				{!!Form::select('estracto',['Seleccione su estracto','1'=>'1','2'=>'2','3'=>'3','4'=>'4'], null,['class'=>'register-input']) !!}
			</div>	

<br>
			{!!Form::label('num_doc', 'Nombre del acudiente') !!}
			{!!Form::text('nom_acudiente' ,null,['class'=>'register-input','placeholder' => 'Escriba el nombre de su acudiente']) !!}
			{!!Form::label('num_doc', 'Telefoo del acudiente') !!}
			{!!Form::text('tel_acudiente' ,null,['class'=>'register-input','placeholder' => 'Escriba el telefóno del acudiente' ]) !!}

<div class="register-switch">
			{!!Form::label('sancion', '¿Tiene Sancion?') !!}
			si	{!!Form::radio('sancion',1)!!} | No	{!!Form::radio('sancion',2)!!}

</div>	 
			{!!Form::label('num_doc', 'Observaciones') !!}
			{!!Form::textarea('observaciones' ,null,['class'=>'register-input','placeholder' => 'Escriba las observaciones' ]) !!}

		
					 
		



   			
