<table class="table table-hover" >
 							<tr>
 							
 								<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Nombre equipo</center></th>
 								<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Disciplina</th>
 								

 								<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Nombre del Jugador</th>
								<th><font color=#2D4259 size="4" face="Lucida grande"> <center>#id</th>
 								
 							</tr>
 						@foreach ($registroJugadorEquipos as $registroJugadorEquipo)
 							<tr>
 								<td>{{$registroJugadorEquipo->equipo->nombre}}</td>
 								<td>{{$registroJugadorEquipo->equipo->disciplina}}</td>
 							
 								<td>
 									@if(! empty($registroJugadorEquipo->jugador->full_name))
 									
 												{{$registroJugadorEquipo->jugador->full_name}}
 									@else <font color="red">Este Jugador fue borrado
 									@endif	</td>
								
 								<td>
 									@if(! empty($registroJugadorEquipo->jugador->id))
 									
 												{{$registroJugadorEquipo->jugador->id}}
 									@else <font color="red">Este Jugador fue borrado
 									@endif	</td>

 													
 								
 							</tr>
 								@endforeach
 						</table>
 						{!!$registroJugadorEquipos->render()!!}
