				<h3>Filtro</h3>
					<div class="col-sm-3">
		{!!Form::open(Request::all(),['route'=>'admin.registro_jugador_clubs.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
				  <div class="form-group">
				    
				    {!!Form::text('nombreclub',null,['class'=>'form-control','placeholder'=>'Nombre del club'])!!}
				  	  </div>
				  	   </div>
				 <div class="col-sm-3">

				 <div class="form-group">
				  	{!!Form::text('nombrejugador',null,['class'=>'form-control','placeholder'=>'Nombre del jugador'])!!}
 			 		
				   </div>   </div> 



				   <div class="col-sm-4">
				  <div class="form-group">

 				  	   {!!Form::select('disciplina',config('disciplina.disciplina'),null,['class'=>'form-control'])!!} 	 
 </div>
 			  </div>
 			 	 <div class="col-sm-2">
				  <div class="form-group">	
   <button type="submit" class="btn btn-default">Buscar!!</button><span></span>
  </div>
 			  </div>
				
			
				</form>
 			  
		{!!Form::close()!!}