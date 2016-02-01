<?php namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Hash;

use Illuminate\Http\Request;

use App\User;

class AuthController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}
	public function loginform(){
		return view('auth.login');
	}
	public function logout(){
		Auth::logout();
		return redirect('/admin');
	}

	public function authenticate(Request $request){
		if($request->has('login') && $request->has('password')){
			$login = $request->input('login');
			$password = $request->input('password');
			if (Auth::attempt(['login' => $login, 'password' => $password])){
				return redirect('/admin');
			}else{
				echo "err";
			}
		
			
		}
	}

	public function signupform(){
		return view('auth.signup');
	}

	public function signup(Request $request){
		$login = $request->login;
		$password = Hash::make($request->password);

		$user_model = new User;
		$user_model->login = $login;
		$user_model->password = $password;
		if($user_model->save()){
			return redirect('/auth/login');
		}

	}

}
