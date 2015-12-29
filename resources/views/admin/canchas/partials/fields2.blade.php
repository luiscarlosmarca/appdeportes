  <div class="register">

    {!!Form::label('observaciones', 'Nombre del escenario:') !!}

  	{!!Form::text('nombre',null,['class'=>'register-input','placeholder' => 'Escriba el nombre del escenario deportivo','requiered']) !!}
	  
	{!!Form::label('observaciones', 'Barrio:') !!}

	{!!Form::text('barrio',null,['class'=>'register-input','placeholder' => 'Escriba el nombre del Barrio','requiered']) !!}
 
 <div class="register-switch">
	{!!Form::label('activo', '¿Esta en buenas condiciones?') !!}
	si	{!!Form::radio('activo',true,['class'=>'register-input'])!!} | 
	No {!!Form::radio('activo',false)!!}
 </div>
     
    {!!Form::label('observaciones', 'Observaciones') !!}
	{!!Form::textarea('observaciones',null,['class'=>'register-input','placeholder' => ' Escriba alguna nota u observación','requiered']) !!}
	
	{!!Form::label('Agregar imagen', 'Agregar Imagen') !!}	
     <input type="file" class="register-input" name="file" >
      
               
<br>
	

    

