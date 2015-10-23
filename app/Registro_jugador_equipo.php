<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro_jugador_equipo extends Model {

	protected $table="registro_jugador_equipos";
	protected $fillable = ['jugador_id','equipo_id'];
	public function jugador()
	{
		return $this->belongsTo('App\Jugador');
	}
	public function equipo()
	{
		return $this->belongsTo('App\Equipo');
	}

}
