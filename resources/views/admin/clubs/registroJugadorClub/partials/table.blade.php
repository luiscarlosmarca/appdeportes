<table class="table table-hover" >
 							<tr>
 							
 								<th> 								<font color=#2D4259 size="4" face="Lucida grande"> <center>

 									Nombre club</th>
 								<th> 								<font color=#2D4259 size="4" face="Lucida grande"> <center>
Discplina</th>
 							
 								
 								
 								<th> 								<font color=#2D4259 size="4" face="Lucida grande"> <center>
Nombre jugador</th>

 								<th> 								<font color=#2D4259 size="4" face="Lucida grande"> <center>
#id jugador</th>
 									

 								
 								

 								
 							</tr>
 						@foreach ($registroJugadorClubs as $registroJugadorClub)
 							<tr>
 					
 			<td>{{$registroJugadorClub->club->nombre}}</td>
 			<td>{{$registroJugadorClub->club->disciplina}}</td>

 			<td>@if(! empty($registroJugadorClub->jugador->full_name))
 							
 							{{$registroJugadorClub->jugador->full_name}}
 									@else <font color="red">Este Jugador fue borrado
 									@endif	
			</td>
 		
			<td>@if(! empty($registroJugadorClub->jugador->id))
 									{{$registroJugadorClub->jugador->id}}
 									@else<font color="red"> No exite</font>
 									@endif	</td>
 								
 								
 							</tr>
 								@endforeach
 						</table>
 						{!!$registroJugadorClubs->render()!!}