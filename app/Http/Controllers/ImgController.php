<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Input as Input;
use Illuminate\Http\Request;
use App\Cancha;
class ImgController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		  return \View::make('admin.canchas.up');

	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function upload(Request $request)
	{
	//obtenemos el campo file definido en el formulario
      if(Input::hasFile('file'))
      {

      	 $file = Input::file('file');
      	 $file->move('upload',$file->getClientOriginalName());
      	 echo '<img src="/upload/'.$file->getClientOriginalName().'"/>';
 $imagen='<img src="/upload/'.$file->getClientOriginalName().'/>"';
dd($imagen);
       //obtenemos el nombre del archivo
   
 
       //indicamos que queremos guardar un nuevo archivo en el disco local
      //\Storage::disk('local')->put($file,  \File::get($file));
 	 //echo '<img src="/upload/'.$file->getClientOriginalName().'"/>';
       return "archivo guardado";
	}
	return "erro";
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
