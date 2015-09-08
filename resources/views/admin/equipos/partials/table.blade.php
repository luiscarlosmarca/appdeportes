<table class="table table-hover" >
 							<tr>
 								<th> 								<font color=#2D4259 size="4" face="Lucida grande"> <center>
#id</th>
 								<th> 								<font color=#2D4259 size="4" face="Lucida grande"> <center>
Nombre equipo</th>
 								<th> 								<font color=#2D4259 size="4" face="Lucida grande"> <center>
Disciplina</th>
 								<th> 								<font color=#2D4259 size="4" face="Lucida grande"> <center>
Categoria</th>

 								<th> 								<font color=#2D4259 size="4" face="Lucida grande"> <center>
Capitan del Equipo</th>
 								<th> 								<font color=#2D4259 size="4" face="Lucida grande"> <center>
Observaciones</th>
 								<th> 								<font color=#2D4259 size="4" face="Lucida grande"> <center>
Acciones</th>
 							</tr>
 						@foreach ($equipos as $equipo)
 							<tr>
 								<td>{{$equipo->id}}</td>
 								<td>{{$equipo->nombre}}</td>
 								<td>{{$equipo->disciplina}}</td>
 								<td>{{$equipo->categoria}}</td>
 								<td>

 									@if(! empty($equipo->jugador->nombre))
 									{{$equipo->jugador->nombre}}
 									@else <font color="red"> El capitan fue borrado
 									@endif	

 									</td>

 								
 								<td>{{$equipo->observaciones}}</td>
 						<td>
 								<a href="{{route('admin.equipos.edit',$equipo)}}">Editar </a></td>
 								
 							</tr>
 								@endforeach
 						</table>
 						{!!$equipos->appends(Request::only(['nombre','disciplina','categoria']))->render()!!}
 						 				
