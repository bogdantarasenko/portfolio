<?php namespace App\Http\Middleware;

use Closure;
use App\User;

class Adminregistration {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$user_model = User::all();
		if(count($user_model) == 0){
			return redirect('/signup');
		}


		return $next($request);
	}

}
