<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entrenador;
use App\Http\Requests\EditEntrenadorRequest;
use App\Http\Requests\CreateEntrenadorRequest;
use Illuminate\Http\Request;

use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class EntrenadorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	//$entrenadores= Entrenador::paginate();
	$entrenadores= Entrenador::filter($request->get('nombre'),$request->get('nivelacademico'),$request->get('num_doc'),$request->get('tipo'),$request->get('sancion'));
		return view ('admin.entrenadores.index', compact('entrenadores'));
	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.entrenadores.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateEntrenadorRequest $request)
	{
		
		
		$entrenador = Entrenador::create($request->all());

		Session::flash('message',$entrenador->full_name.' Fue creado'.' '.'#id asignado:'.' '.$entrenador
			->id);
		

		return redirect()->route('admin.entrenadores.index');



		

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
		$entrenador=Entrenador::findOrfail($id);

		return view('admin.entrenadores.edit',compact('entrenador'));		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditEntrenadorRequest $request, $id)
	{
	  $entrenador=Entrenador::findOrFail($id);

		$entrenador->fill($request->all());
		$entrenador->save();
	Session::flash('message',$entrenador->full_name.' Fue actualizado');
		return redirect()->route('admin.entrenadores.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	$entrenador = Entrenador::findOrFail($id);

		$entrenador->delete();

		Session::flash('message',$entrenador->full_name.' Fue eliminado');
		return redirect()->route('admin.entrenadores.index');
	}

}
