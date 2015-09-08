<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Torneo;
use App\Http\Requests\CreateTorneoRequest;
use App\Http\Requests\EditTorneoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class TorneosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	//$torneos=Torneo::paginate();
	$torneos= Torneo::filter($request->get('nombre'),$request->get('disciplina'),$request->get('categoria'));

	return view ('admin.torneos.index', compact('torneos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
			return view('admin.torneos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateTorneoRequest $request)
	{
		$torneo = Torneo::create($request->all());
		Session::flash('message',$torneo->nombre.' Fue creado'.' '.'#id asignado:'.' '.$torneo
			->id);
		
		return redirect()->route('admin.torneos.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		return view('auth.inicio');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$torneo=Torneo::findOrfail($id);

		return view('admin.torneos.edit',compact('torneo'));	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditTorneoRequest $request, $id)
	{

	  $torneo=Torneo::findOrFail($id);

		$torneo->fill($request->all());
		$torneo->save();
		Session::flash('message',$torneo->nombre.' Fue actualizada');
		return redirect()->route('admin.torneos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$torneo = Torneo::findOrFail($id);

		$torneo->delete();

		Session::flash('message',$torneo->nombre.' Fue eliminado');
		return redirect()->route('admin.torneos.index');
	}

}
