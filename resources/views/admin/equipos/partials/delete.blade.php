{!!Form::open (['route'=> ['admin.equipos.destroy', $equipo],'method'=>'DELETE'])!!}
<button type="submit" onclick="return confirm('Esta seguro de eliminar este equipo?')"class="btn btn-danger">Eliminar Equipo</button>
{!! Form::close()!!}