<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Session;
class Entrenador extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'entrenadores';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['tipo_doc','num_doc','nombre','apellido','FeNa','direccion','telefono','email','nivelAcademico','observaciones','sancion','tipo' ];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */




	public function getfullnameAttribute()
	{
		return $this->nombre.' 	'.$this->apellido;
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

		public function scopeTipo($query, $tipo)

		{

			$tipos=config('tipo.tipo');


			if($tipo!= "" && isset($tipos[$tipo]))
				{
					$query->where('tipo',$tipo);
					//Session::flash('message','Estracto:'.$estracto.' : ' .' Resultado de la busqueda');	
				}
		}

	public static function filter($nombre,$nivelAcademico,$num_doc,$tipo,$sancion)
		{
			return Entrenador::nombre($nombre)
				->tipo($tipo)
				->sancion($sancion)
				->nivelacademico($nivelAcademico)
				->num_doc($num_doc)
				->orderBy('nombre','ASC')
				->paginate();
		}
		
}
