<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEntrenadorRequest extends Request {

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
		'tipos'=> 'required',
		'num_doc'=>'required|unique:entrenadores|integer',
		'email'=>'required|unique:entrenadores|email',
		'telefono'=>'required|integer',
		'FeNa'=> 'required|date',
		];
	}

}
