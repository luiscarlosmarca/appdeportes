<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Equipo;
use App\Http\Requests\CreateEquipoRequest;
use App\Http\Requests\EditEquipoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class EquipoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$equipos=Equipo::disciplina($request->get('disciplina'))->nombre($request->get('nombre'))->categoria($request->get('categoria'))->paginate();


	return view ('admin.equipos.index', compact('equipos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.equipos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateEquipoRequest $request)
	{
		$equipo= Equipo::create($request->all());
		Session::flash('message',$equipo->nombre.' Fue creado'.' '.'#id asignado:'.' '.$equipo
			
			->id);
		
		return redirect()->route('admin.equipos.index');
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
		$equipo=Equipo::findOrfail($id);

		return view('admin.equipos.edit',compact('equipo'));	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditEquipoRequest $request, $id)
	{

	  $equipo=Equipo::findOrFail($id);

		$equipo->fill($request->all());
		$equipo->save();
		Session::flash('message',$equipo->nombre.' Fue actualizada');
		return redirect()->route('admin.equipos.index');
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$equipo = Equipo::findOrFail($id);

		$equipo->delete();

		Session::flash('message',$equipo->nombre.' Fue eliminado');
		return redirect()->route('admin.equipos.index');
	}

}
