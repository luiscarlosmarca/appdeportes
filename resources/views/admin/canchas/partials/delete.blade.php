{!!Form::open (['route'=> ['admin.escenarios_deportivos.destroy', $cancha],'method'=>'DELETE'])!!}
<button type="submit" onclick="return confirm('Esta seguro de eliminar este escenario deportivo?')"class="btn btn-danger">Eliminar Escenario Deportivo</button>
{!! Form::close()!!}