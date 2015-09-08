<?php namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Session;
class Torneo extends Model {

	protected $table="torneos";
	protected $fillable = ['nombre','Fecha_inicio','disciplina','categoria','observaciones' ];



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

public static function filter($nombre,$disciplina,$categoria)
		{
			return Torneo::nombre($nombre)
				->disciplina($disciplina)
				
				->categoria($categoria)
				->orderBy('nombre','ASC')
				->paginate();
		}


}
