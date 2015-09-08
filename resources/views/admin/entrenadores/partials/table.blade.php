<table class="table table-hover" widht=80%>
 							<tr>
 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									#id</th>
 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Tipo documento</th>

 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Numero documento</th>
 								
 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Nombre Completo</th>

 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Télefono</th>


 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Dirección</th>
 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Cuerpo tecnico</th>
 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Nivel Academico</th>
 									<th>

 									<b><font color=#2D4259 size="4" face="Lucida grande"> <center>

 									Sanción</th>
 								<th>
 									<font color=#2D4259 size="4" face="Lucida grande"> <center>
 									Accion</th>
 							</tr>
 								@foreach ($entrenadores as $entrenador)
 							<tr>
 								<td>{{$entrenador->id}}</td>
 								<td>{{$entrenador->tipo_doc}}</td>
 								<td>{{$entrenador->num_doc}}</td>
 								<td>{{$entrenador->full_name}}</td>
 								<td>{{$entrenador->telefono}}</td>
 								<td>{{$entrenador->direccion}}</td>
 								<td>{{$entrenador->tipo}}</td>
 								<td>{{$entrenador->nivelAcademico}}</td>
 							<td>@if($entrenador->sancion==0)
 									No
 									@elseif($entrenador->sancion==1)Si
 									@endif	

 									</td>
 								<td>
 									<a href="{{route('admin.entrenadores.edit',$entrenador)}}">Editar </a>
 									
 								</td>
 							</tr>
 								@endforeach
 						</table>
 						{!!$entrenadores->render()!!}