<?php namespace App\Http\Controllers;

use App\Projects;
use App\About;
use App\Contact;
use App\Blog;

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

	
	
	public function index(){
		$model = Projects::all();
		return view('main.index',['model'=>$model]);
	}

	public function showprj($id){

		$project = Projects::find($id);

		$image_array = [];

		$image_array["$project->id"] = explode(",",$project->imgpath);
	

		return view('main.project',['model'=>$project,'images' => $image_array]);
	}

	public function blog()
	{
		$blog_model = Blog::all();
		return view('main.blog',['model' => $blog_model]);
	}

	public function about()
	{
		$about_model = About::all();
		return view('main.about',['model' => $about_model]);
	}

	public function portfolio()
	{	
		$portfolio = Projects::all();

		$image_array = [];

		foreach ($portfolio as $images) {
			$image_array["$images->id"] = explode(",",$images->imgpath);
		}
		
		//dd($image_array);
		return view('main.portfolio',['model' => $portfolio,'images' => $image_array]);
	}

	public function contact()
	{
		$contact_model = Contact::all();
		return view('main.contact',['model' => $contact_model]);
	}

}
