<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Projects;
use App\Blog;
use App\Contact;
use App\About;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('myAuth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.index');
	}
	public function addprj(Request $request){
		//$input = $request->all();
		if($request->hasFile('image')){
			$destenition = public_path()."/img/";
			$extension = $request->file('image')->getClientOriginalExtension();
			$fileName = rand(11111,99999).'.'.$extension;
			$request->file('image')->move($destenition,$fileName);

		}
		

		$model = new Projects;
		$model->name = $request->input('name');
		$model->description = $request->input('description');
		$model->additional_description = $request->input('additional_description');
		$model->url = $request->input('url');
		if(isset($fileName)){
			$model->imgpath = $fileName;
		}
		
		if($model->save()){
			return redirect('/admin');
		}

		//dd($input);
	}

	public function editportfolio(){
		return view('admin.editportfolio');
	}
	public function editabout(){
		return view('admin.editabout');
	}
	public function editblog(){
		return view('admin.editblog');
	}
	public function editcontact(){
		return view('admin.editcontact');
	}

	public function posteditportfolio(Request $request){

		$model = new Projects;

		if($request->hasFile('image')){
			$destenition = public_path()."/img/";
			$extension = $request->file('image')->getClientOriginalExtension();
			$fileName = rand(11111,99999).'.'.$extension;
			$request->file('image')->move($destenition,$fileName);
		}
		

		
		$model->name = $request->input('name');
		$model->description = $request->input('description');
		$model->additional_description = $request->input('additional_description');
		$model->url = $request->input('url');

		if(isset($fileName)){
			$model->imgpath = $fileName;
		}
		
		if($model->save()){
			return redirect('/admin');
		}

	}
	public function posteditabout(Request $request){
		
		$model_about = new About;
		$model_about->about = $request->input('about');
		$model_about->save();
	}
	public function posteditblog(Request $request){

		$model_blog = new Blog;
		$model_blog->title = $request->input('title');
		$model_blog->content = $request->input('content');
		$model_blog->save();
	}
	public function posteditcontact(Request $request){

		$model_contact = new Contact;
		$model_contact->adress = $request->input('adress');
		$model_contact->email = $request->input('email');
		$model_contact->telephone = $request->input('telephone');
		$model_contact->work_time = $request->input('work_time');
		$model_contact->save();
	}

	

}
