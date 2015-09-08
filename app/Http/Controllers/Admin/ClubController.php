<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Club;
use App\Http\Requests\CreateClubRequest;
use App\Http\Requests\EditClubRequest;
use Illuminate\Http\Request;

use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class ClubController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		 	//dd($request->get('categoria'));	
		 //$clubs= Club::disciplina($request->get('disciplina'))->nombre($request->get('nombre'))->nit($request->get('nit'))->categoria($request->get('categoria'))->paginate();
	$clubs= Club::filter($request->get('nombre'),$request->get('disciplina'),$request->get('nit'),$request->get('categoria'));

	return view ('admin.clubs.index', compact('clubs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.clubs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateClubRequest $request)
	{
		$club = Club::create($request->all());
		Session::flash('message',$club->nombre.' Fue creado'.' '.'#id asignado:'.' '.$club->id);
		return redirect()->route('admin.clubs.index');
	
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
		$club=Club::findOrfail($id);

		return view('admin.clubs.edit',compact('club'));		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditClubRequest $request, $id)
	{

	  $club=Club::findOrFail($id);

		$club->fill($request->all());
		$club->save();
		Session::flash('message',$club->nombre.' Fue Actualizado');
		return redirect()->route('admin.clubs.index');
		
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$club = Club::findOrFail($id);

		$club->delete();

		Session::flash('message',$club->nombre.' Fue eliminado');
		return redirect()->route('admin.clubs.index');
	}

}
