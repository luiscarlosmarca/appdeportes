<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class isAdmin {

	private $auth;
	public function __construct(Guard $auth)
		{

			$this->auth=$auth;
		}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if ($this->auth->user()->tipo != 'admin')
		{
			//$this->auth->logout(); sacar el usuario de laa seccion
			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
				//return redirect()->guest('/');
				//Session::flash('message',' Zona de usuario');
				return redirect()->to('home');
			}
		}
		return $next($request);
	}

}
