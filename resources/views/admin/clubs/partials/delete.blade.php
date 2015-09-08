{!!Form::open (['route'=> ['admin.clubs.destroy', $club],'method'=>'DELETE'])!!}
<button type="submit" onclick="return confirm('Esta seguro de eliminar este Club?')"class="btn btn-danger">Eliminar Club</button>
{!! Form::close()!!}