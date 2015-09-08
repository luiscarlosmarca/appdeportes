<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Registro_jugador_equipo;
use App\Http\Requests\RegistrarJugadorEquipoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class RegistroJugadorEquipoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$registroJugadorEquipos=Registro_jugador_equipo::paginate();

	return view ('admin.equipos.registroJugadorEquipo.index', compact('registroJugadorEquipos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.equipos.registroJugadorEquipo.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(RegistrarJugadorEquipoRequest $request)
	{
		$registroJugadorEquipos =Registro_jugador_equipo::create($request->all());
		Session::flash('message',$registroJugadorEquipos->jugador->full_name.' Fue registrado al equipo'.' ' .$registroJugadorEquipos->equipo->nombre);

		return redirect()->route('admin.registro_jugador_equipos.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
