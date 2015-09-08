{!!Form::open (['route'=> ['admin.users.destroy', $user],'method'=>'DELETE'])!!}
<button type="submit" onclick="return confirm('Esta seguro de eliminar este usuario?')"class="btn btn-danger">Eliminar Usuario</button>
{!! Form::close()!!}