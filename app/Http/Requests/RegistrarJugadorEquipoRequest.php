<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegistrarJugadorEquipoRequest extends Request {

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
		'jugador_id'   => 'required|integer|exists:jugadores,id',
		'equipo_id'    => 'required|integer|exists:equipos,id'
		];
	}

}
