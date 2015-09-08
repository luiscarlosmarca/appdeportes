<table class="table table-hover" >
 							<tr>
 								 <th><b><font color=#2D4259 size="4" face="Lucida grande"> <center>Nombre del escenario</th>
 								<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Barrio</th>
 								
 								
 								<th><font color=#2D4259 size="4" face="Lucida grande"> <center>Observaciones</th>
								<th><font color=#2D4259 size="4" face="Lucida grande"> <center>¿Esta en buenas codiciones?</th>	
							 	<th><font color=#2D4259 size="4" face="Lucida grande"> <center>	Imagen</th>	

 								<th><font color=#2D4259 size="4" face="Lucida grande"> <center>	Acciones</th>	
								
 								

 							
 							</tr>
 								@foreach ($canchas as $cancha)
 							<tr>
 								<td>{{$cancha->nombre}}</td>
 								<td>{{$cancha->barrio}}</td>
 								<td>{{$cancha->observaciones}}</td>
 								
 								<td><center>@if($cancha->activo==1)
 									Si
 									@else No
 									@endif	</center>
 									</td>
 										<td><a href="/upload/{{$cancha->imagen}}" target="black"><img src="/upload/{{$cancha->imagen}}" height="80" width="80"></a></td>

 										<td>
 								<a href="{{route('admin.escenarios_deportivos.edit',$cancha)}}">Editar </a></td>
 								
 							</tr>
 							</tr>
 								@endforeach
 						</table>
 					{!!$canchas->render()!!}