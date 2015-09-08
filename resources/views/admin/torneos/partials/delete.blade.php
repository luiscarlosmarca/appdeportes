{!!Form::open (['route'=> ['admin.torneos.destroy', $torneo],'method'=>'DELETE'])!!}
<button type="submit" onclick="return confirm('Esta seguro de eliminar este torneo?')"class="btn btn-danger">Eliminar Torneo</button>
{!! Form::close()!!}