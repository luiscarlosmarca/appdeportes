 <table class="table table-hover">
 							<tr>
 								<th>#</th>
 								<th>Nombre</th>
 								<th>Email</th>
 								<th>tipo</th>
 								<th>Activo</th>
 								<th>Accion</th>
 							</tr>
 								@foreach ($users as $user)
 							<tr>
 								<td>{{$user->id}}</td>
 								<td>{{$user->name}}</td>
 								<td>{{$user->email}}</td>
 								<td>{{$user->tipo}}</td>
 								<td>{{$user->active}}</td>
 								<td>
 									<a href="{{route('admin.users.edit', $user) }}">Editar </a>
 									
 								</td>
 							</tr>
 								@endforeach
 						</table>