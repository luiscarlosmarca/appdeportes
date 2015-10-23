<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Session;
class Club extends Model {

	protected $table="clubes";
	protected $fillable = ['nit','nombre','direccion','Dtecnico_id','telefono','disciplina','categoria','observaciones' ];


		public function  Dtecnico()
		{

		 return $this->belongsTo('App\Entrenador','Dtecnico_id','id');
		}
	public function scopeNombre($query,$nombre)
	{
		//dd("scope".$name);
		if (trim($nombre) != "")
		{
		$query->where(\DB::raw("CONCAT(Nombre)"),"LIKE","%$nombre%");
		Session::flash('message','Nombre:'.' '.$nombre.'  ' .' Resultado de la busqueda');	
		}
			//hacer busquedas con apellido
			//$query->where(\DB::raw("CONCAT('firs_name,' ',last_name)"),$name);
		
	}
	public function scopeNit($query, $nit)

		{
			
				if (trim($nit) != "")
				{
					$query->where(\DB::raw("CONCAT(nit)"),"LIKE","%$nit%");
					//Session::flash('message','Estracto:'.$estracto.' : ' .' Resultado de la busqueda');	
				}
		}


public function scopeEntrenador_id($query, $entrenador_id)

		{

				if (trim($entrenador_id) != "")
				{	
				//$query->where(this->entrenador->nombre,$entrenador_id);	
				//$query->join('clubes','entrenador_id', '=', 'entrenadores','id')
                 //->where('entrenadores','nombre',$entrenador_id);
					//$query->where(\DB::raw("CONCAT(entrenador_id)"),"LIKE","%$entrenador_id%");
					//Session::flash('message','Estracto:'.$estracto.' : ' .' Resultado de la busqueda');	
				}
		}

public function scopeCategoria($query, $categoria)

		{

			$categorias=config('categoria.categoria');


			if($categoria != "" && isset($categorias[$categoria]))
				{
					$query->where('categoria',$categoria);
					//Session::flash('message','Estracto:'.$estracto.' : ' .' Resultado de la busqueda');	
				}
		}
		public function scopeDisciplina($query, $disciplina)
			
		{
		
			$disciplinas=config('disciplina.disciplina');


			if($disciplina != "" && isset($disciplinas[$disciplina]))
				{
					$query->where('disciplina',$disciplina);
					//Session::flash('message','Estracto:'.$estracto.' : ' .' Resultado de la busqueda');	
				}
		}


	public static function filter($nombre,$disciplina,$nit,$categoria)
		{
			return Club::nombre($nombre)
				->disciplina($disciplina)
				->nit($nit)
				->categoria($categoria)
				->orderBy('nombre','ASC')
				->paginate();
		}



}
