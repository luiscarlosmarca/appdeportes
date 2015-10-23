<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Session;
class Cancha extends Model {

	protected $table="canchas";
	protected $fillable = ['nombre','barrio','activo','observaciones','imagen'];

public function scopeNombre($query,$nombre)
	{
	
		if (trim($nombre) != "")
		{
		$query->where(\DB::raw("CONCAT(nombre)"),"LIKE","%$nombre%");
		Session::flash('message','Nombre:'.' '.$nombre.'  ' .' Resultado de la busqueda');	
		}
		
	}


public function scopeBarrio($query,$barrio)
	{
		
		if (trim($barrio) != "")
		{
		$query->where(\DB::raw("CONCAT(barrio)"),"LIKE","%$barrio%");
		}
			
		
	}

	public function scopeActivo($query,$asctivo)
	{
		
		
		
		$query->where(\DB::raw("CONCAT(activo)"),"$activo");
		
			
		
	}



public static function filter($nombre,$barrio)
		{
			return Cancha::nombre($nombre)
				->barrio($barrio)
			
				
				->orderBy('nombre','ASC')
				->paginate();
		}
}
