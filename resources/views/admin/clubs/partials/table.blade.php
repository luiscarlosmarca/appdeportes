<table class="table table-hover" >
 							<tr>
 								<th>
 								<font color=#2D4259 size="4" face="Lucida grande"> <center>

 									#id</th>
 								<th>
  									<font color=#2D4259 size="4" face="Lucida grande"> <center>
									
 									#Nit</th>
 								<th> 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
Nombre club</th>
 								
 								
 								<th> 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
Direccion</th>
								<th> 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
Disciplina</th>	
								<th> 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
Categoria</th>
 								
 																
 								<th> 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
DTecnico </th>
 								<th> 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
Observaciones </th>
								<th> 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
Acciones </th>
 						
 							</tr>
 								@foreach ($clubs as $club)
 							<tr>
 								<td>{{$club->id}}</td>
 								<td>{{$club->nit}}</td>
 								<td>{{$club->nombre}}</td>
 								
 								<td>{{$club->direccion}}</td>
 								<td>{{$club->disciplina}}</td>
 								<td>{{$club->categoria}}</td>
 								
 								<td>

								@if(! empty($club->Dtecnico->fullname))
 									{{$club->Dtecnico->fullname}}
 									@else <font color="red"> El entrenador fue eliminado
 									@endif	

 								</td>
 								<td>{{$club->observaciones}}</td>
 								<td>
 									<!-- Pasamos el id que lo recibe el metodo edit -->
 									<a href="{{route('admin.clubs.edit',$club)}}">Editar </a>
 									
 								</td>
 							</tr>
 								@endforeach
 						</table>
 				{!!$clubs->appends(Request::only(['nombre','disciplina','nit','categoria']))->render()!!}