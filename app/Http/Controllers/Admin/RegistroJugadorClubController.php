<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Registro_jugador_club;
use App\Http\Requests\RegistrarJugadorClubRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class RegistroJugadorClubController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
			//$registroJugadorClubs=Registro_jugador_club::filter();

	$registroJugadorClubs=Registro_jugador_club::orderby('club_id','ASC')->paginate();

	return view ('admin.clubs.registroJugadorClub.index', compact('registroJugadorClubs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('admin.clubs.registroJugadorClub.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(RegistrarJugadorClubRequest $request)
	{

		$registroJugadorClubs =Registro_jugador_club::create($request->all());
		$registroJugadorClubs->filter();
		Session::flash('message',$registroJugadorClubs->jugador->full_name.' Fue registrado al club'. ' '.$registroJugadorClubs->club->nombre);
		return redirect()->route('admin.registro_jugador_clubs.index');
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
