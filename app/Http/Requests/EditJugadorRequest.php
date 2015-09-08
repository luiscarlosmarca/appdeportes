<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;
class EditJugadorRequest extends Request {
 	
 	private $route;
 	public function __construct(Route $route)
 	{
 		$this->route=$route;

 	}
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
		'num_doc'=>'required|integer|unique:jugadores,num_doc,'.$this->route->getParameter('jugadores'),
		'email'=>'required|email|unique:jugadores,email,'.$this->route->getParameter('jugadores'),
		'telefono'=>'required|integer',
		'FeNa'=> 'required|date',
		'estracto'=>'required',
		'nom_acudiente'=> 'string',
		'tel'=>'integer'
		];
	}

}
