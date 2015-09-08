<table class="table table-hover" >
 							<tr>
 								<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Fecha de inicio</th>
 								<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Nombre club</th>
 								
 								
 								<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Disciplina</th>
								<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Categoria</th>	
									
								<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Observaciones</th>
 								<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Acciones</th>							
 								

 						
 							</tr>
 								@foreach ($torneos as $torneo)
 							<tr>
 								<td>{{$torneo->Fecha_inicio}}</td>
 								<td>{{$torneo->nombre}}</td>
 								<td>{{$torneo->disciplina}}</td>
 								<td>{{$torneo->categoria}}</td>
 								
 								
								<td>{{$torneo->observaciones}}</td>

								<td>
 								<a href="{{route('admin.torneos.edit',$torneo)}}">Editar </a></td>
 							</tr>
 								@endforeach
 						</table>
 						
 							{!!$torneos->appends(Request::only(['nombre','discipliina','categoria']))->render()!!}