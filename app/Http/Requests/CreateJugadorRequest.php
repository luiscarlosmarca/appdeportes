<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateJugadorRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
		'nombre'=> 'required|string',
		'apellido'=> 'required|string',
		'tipo_doc'=> 'required',
		'num_doc'=>'required|unique:jugadores|integer',
		'email'=>'required|unique:jugadores|email',
		'telefono'=>'required|integer',
		'FeNa'=> 'required|date',
		'estracto'=>'required',
		'nom_acudiente'=> 'string',
		'telefono'=>'integer'
		];
	}

}
