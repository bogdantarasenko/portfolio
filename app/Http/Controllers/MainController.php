<?php namespace App\Http\Controllers;

use App\Projects;
class MainController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	
	public function index(){
		$model = Projects::all();
		return view('main.index',['model'=>$model]);
	}
	public function showprj($id){
		$model = Projects::find($id);
		return view('main.project',['model'=>$model]);
	}

}
