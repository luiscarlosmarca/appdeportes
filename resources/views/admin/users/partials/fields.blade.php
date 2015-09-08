
<div class="form-group">
							{!!Form::label('name', 'Nombre') !!}
					   		{!!Form::text('name' ,null,['class'=>'form-control floating-label','placeholder' => 'Escriba su nombre']) !!}
  </div>


<div class="form-group">
    					{!!Form::label('email', 'Correo electronico') !!}
						{!!Form::text('email' ,null,['class'=>'form-control floating-label','placeholder' => ' Escriba su Correo electronico']) !!}

	</div>
						  
	<div class="form-group">
					  		{!!Form::label('password', 'Contraseña') !!}
					   		{!!Form::password('password' ,['class'=>'form-control']) !!}
		</div>
						
		<div class="form-group">
						    {!!Form::label('tipo', 'Tipo de usuario')  !!}
					  		{!!Form::select('tipo',['Seleccione tipo','user'=>'Usuuario','aux'=>'Auxiliar'], null, ['class'=>'form-control']) !!}

		 </div>
