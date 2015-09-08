{!!Form::open (['route'=> ['admin.jugadores.destroy', $jugador],'method'=>'DELETE'])!!}
<button type="submit" onclick="return confirm('Esta seguro de eliminar este Jugador?')"class="btn btn-danger">Eliminar Jugador</button>
{!! Form::close()!!}