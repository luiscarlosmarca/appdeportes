<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];



	public function fullnamePer()
	{
		return $this->name.' 	'.$this->tipo;
	}
	public function perfil()
	{
		return $this->hasOne('App\perfil_persona');
	}

	public function setPasswordAttribute($value)
	{
		if(! empty($value))
		{
		$this->attributes['password']=bcrypt($value);
		}	
	}

	public function scopeName($query,$name)
	{
		//dd("scope".$name);
		if (trim($name) != "")
		{
		$query->where(\DB::raw("CONCAT(name)"),"LIKE","%$name%");	
		}
			//hacer busquedas con apellido
			//$query->where(\DB::raw("CONCAT('firs_name,' ',last_name)"),$name);
		
	}

	public function scopeTipo($query, $tipo)

		{
			$tipos=config('options.tipo');


			if($tipo != "" && isset($tipos[$tipo]))
				{
					$query->where('tipo',$tipo);
				}
		}

	public static function filter($name,$tipo)
		{
			return User::name($name)
				->tipo($tipo)
				->orderBy('name','ASC')
				->paginate();
		}
}
