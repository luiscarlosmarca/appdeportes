<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;
class EditClubRequest extends Request {

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
		'nombre'		 => 'required|string',
		'disciplina'     => 'required|string',	
		'categoria'      => 'required|string',	
		'Dtecnico_id'  =>'required|exists:entrenadores,id',
		'nit'			 =>'required|integer|unique:clubes,nit,'.$this->route->getParameter('clubs'),
		
		];
	}

}
