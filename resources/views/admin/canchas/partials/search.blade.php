
{!!Form::model(Request::all(),['route'=>'admin.escenarios_deportivos.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
				
				  <div class="form-group">
				    
				    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Escenario deportivo'])!!}
				  	{!!Form::text('barrio',null,['class'=>'form-control','placeholder'=>'Nombre del barrio:'])!!}
 			 					<!-- 			{!!Form::label('activo', '¿Esta en buenas condiciones?') !!}
						si	{!!Form::radio('activo',true)!!} | No	{!!Form::radio('activo',false)!!}

 -->
 			  </div>
				  <button type="submit" class="btn btn-default">Buscar!!</button>
			
				</form>
		{!!Form::close()!!}