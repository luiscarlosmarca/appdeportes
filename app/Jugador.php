<?php namespace App;
use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Session;

class Jugador extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'jugadores';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['estracto_doc','num_doc','nombre','apellido','FeNa','direccion','telefono','nom_acudiente','tel_acudiente','email','sisben','estracto','nivelAcademico','observaciones','sancion' ];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];



	public function getfullnameAttribute()
	{
		return $this->nombre.' 	'.$this->apellido;
	}
	


	public function scopeEstracto($query, $estracto)

		{

			$estractos=config('estracto.estracto');


			if($estracto != "" && isset($estractos[$estracto]))
				{
					$query->where('estracto',$estracto);
					//Session::flash('message','Estracto:'.$estracto.' : ' .' Resultado de la busqueda');	
				}
		}

		
	public function scopeNombre($query,$nombre)
	{
		//dd("scope".$name);
		if (trim($nombre) != "")
		{
		$query->where(\DB::raw("CONCAT(nombre,' ',apellido)"),"LIKE","%$nombre%");
		Session::flash('message','Nombre:'.' '.$nombre.'  ' .' Resultado de la busqueda');	
		}
			//hacer busquedas con apellido
			//$query->where(\DB::raw("CONCAT('firs_name,' ',last_name)"),$name);
		
	}


public function scopeSancion($query,$sancion)
{
		//dd("scope".$name);
		if (trim($sancion) != "")
		{
		
		$query->where('sancion',$sancion);
			//hacer busquedas con apellido
			//$query->where(\DB::raw("CONCAT('firs_name,' ',last_name)"),$name);
		
	}	
}

	public function scopeNum_doc($query, $num_doc)

		{
			
				if (trim($num_doc) != "")
				{
					$query->where(\DB::raw("CONCAT(num_doc)"),"LIKE","%$num_doc%");
					//Session::flash('message','Estracto:'.$estracto.' : ' .' Resultado de la busqueda');	
				}
		}

		public function scopeNivelacademico($query, $nivelAcademico)

		{

			$nivelacademicos=config('nivelAcademico.nivelAcademico');


			if($nivelAcademico != "" && isset($nivelacademicos[$nivelAcademico]))
				{
					$query->where('nivelAcademico',$nivelAcademico);
					//Session::flash('message','Estracto:'.$estracto.' : ' .' Resultado de la busqueda');	
				}
		}


	public static function filter($nombre, $estracto,$nivelAcademico,$num_doc,$sancion)
		{
			return Jugador::nombre($nombre)
				->estracto($estracto)
				->nivelacademico($nivelAcademico)
				->num_doc($num_doc)
				->sancion($sancion)
				->orderBy('nombre','ASC')
				->paginate();
		}



	public function registroClubes()
	{
		return $this->hasMany('App\Registro_jugador_club');
	}

	public function registroEquipos()
	{
		return $this->hasMany('App\Registro_jugador_equipo');
	}

	public function getAgeAttribute()
	{
		
		return Carbon::parse($this->FeNa)->age;
	}
		
}

