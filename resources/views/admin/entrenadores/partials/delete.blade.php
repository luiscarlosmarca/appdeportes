{!!Form::open (['route'=> ['admin.entrenadores.destroy', $entrenador],'method'=>'DELETE'])!!}
<button type="submit" onclick="return confirm('Esta seguro de eliminar este entrenador?')"class="btn btn-danger">Eliminar entrenado</button>
{!! Form::close()!!}