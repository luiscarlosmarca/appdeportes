<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Registro_jugador_club extends Model {

	protected $table="registro_jugador_club";
	protected $fillable = ['jugador_id','club_id'];

	public function jugador()
	{
		return $this->belongsTo('App\Jugador');
	}
	public function club()
	{
		return $this->belongsTo('App\Club');
	}

	public static function filter()
	{
		$query=\DB::table('registro_jugador_club')
					->join('jugadores','registro_jugador_club.id','=','jugadores.id')
					->where('jugadores.nombre','like','%Octavia%');
					
		dd($query);

	}


}
