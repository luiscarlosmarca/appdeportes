<table class="table table-hover" widht=100%>
 							<tr>
 								<th>
 									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>

 										#id</th>
 								<th>
 									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>Tipo documento</th>
 								<th><b><font color=#2D4259 size="4" face="Lucida grande"> <center>Numero documento</th>
 								
 								<th>
									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Nombre Completo</th>
 								<th>
									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Télefono</th>
 								<th>
									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Dirección</th>
 								
 								<th>
 									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Nivel Academico</th>
 								<th>
 									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Sisben</th>
 								<th>
 									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>

 									Estracto</th>
 								<th>
 									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>

 									Edad</th>

 									<th>

 									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>

 									Sanción</th>
 								<th>

 									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>

 									Accion</th>
 							</tr>
 								@foreach ($jugadores as $jugador)
 							<tr>
 								<td>{{$jugador->id}}</td>
 								<td>{{$jugador->tipo_doc}}</td>
 								<td>{{$jugador->num_doc}}</td>
 								<td>{{$jugador->full_name}}</td>
 								<td>{{$jugador->telefono}}</td>
 								<td>{{$jugador->direccion}}</td>
 							
 								<td>{{$jugador->nivelAcademico}}</td>
 								<td>@if($jugador->sisben==0)
 									No
 									@elseif($jugador->sisben==1)
 									Si
 									@endif	

 									</td>
 								<td>{{$jugador->estracto}}</td>
 								<td>{{$jugador->age}}</td>
								<td>@if($jugador->sancion==0)
 									No
 									@elseif($jugador->sancion==1)Si
 									@endif	

 									</td>

 								<td>
 									<!-- Pasamos el id que lo recibe el metodo edit -->
 									<a href="{{route('admin.jugadores.edit',$jugador)}}">Editar </a>
 									
 								</td>
 							</tr>
 								@endforeach
 						</table>{!!$jugadores->appends(Request::only(['nombre','estracto','num_doc','nivelAcademico']))->render()!!}
 						