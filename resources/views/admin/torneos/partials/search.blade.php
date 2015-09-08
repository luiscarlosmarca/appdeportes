
{!!Form::model(Request::all(),['route'=>'admin.torneos.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
				
				  <div class="form-group">
				    
				    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del torneo'])!!}
 			 		

 			 		{!!Form::select('disciplina',config('disciplina.disciplina'),null,['class'=>'form-control'])!!}
 			 		{!!Form::select('categoria',config('categoria.categoria'),null,['class'=>'form-control'])!!}

 			  </div>
				  <button type="submit" class="btn btn-default">Buscar!!</button>
			
				</form>
		{!!Form::close()!!}