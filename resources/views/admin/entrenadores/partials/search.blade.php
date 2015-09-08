
{!!Form::model(Request::all(),['route'=>'admin.entrenadores.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
				
				  <div class="form-group">
				    
				    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del entrenador'])!!}
				  	{!!Form::text('num_doc',null,['class'=>'form-control','placeholder'=>'El numero de identificación'])!!}
 			 		{!!Form::select('nivelacademico',config('nivelAcademico.nivelAcademico'),null,['class'=>'form-control'])!!}
 			 		{!!Form::select('tipo',config('tipo.tipo'), null, ['class'=>'form-control']) !!}
 			 		{!!Form::label('sancion', '¿Tiene Sanción?') !!}
					si	{!!Form::radio('sancion',1)!!} | No	{!!Form::radio('sancion',0)!!}

 			  </div>
				  <button type="submit" class="btn btn-default">Buscar!!</button>
			
				</form>
		{!!Form::close()!!}