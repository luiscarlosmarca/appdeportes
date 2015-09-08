


{!!Form::open(Request::all(),['route'=>'admin.escenarios_deportivos.show','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
<div class="col-sm-6">
		
	
		<div class="form-group">

				<br>
				    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Escenario deportivo'])!!}
 			</div>
		 

	
</div>

<div class="col-sm-6">			  


	<div class="form-group"><br>	
				  	{!!Form::text('barrio',null,['class'=>'form-control','placeholder'=>'Nombre del barrio:'])!!}
	</div>
</div>
	<div class="col-sm-12">
	
{{-- botones --}}

  <br>
 <div class="form-group">
	  <button type="submit" class="btn btn-default">Generar informe!!</button></div>
	  		{!!Form::close()!!}