<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['middleware' => 'adminsignup','uses' => 'MainController@index']);



Route::get('/auth/login','AuthController@loginform');
Route::post('/auth/login','AuthController@authenticate');

Route::get('/auth/logout','AuthController@logout');



Route::get('/project/{id}','MainController@showprj');

Route::get('/signup','AuthController@signupform');

Route::post('/signup','AuthController@signup');

Route::get('/admin', 'HomeController@index');

//Route::post('admin/addprj','HomeController@addprj');
Route::get('/admin/portfolio', 'HomeController@editportfolio');

Route::get('/admin/about', 'HomeController@editabout');

Route::get('/admin/blog', 'HomeController@editblog');

Route::get('/admin/contact', 'HomeController@editcontact');

//--------------

Route::post('/admin/portfolio', 'HomeController@posteditportfolio');

Route::post('/admin/about', 'HomeController@posteditabout');

Route::post('/admin/blog', 'HomeController@posteditblog');

Route::post('/admin/contact', 'HomeController@posteditcontact');



/*
Route::controllers([
	'auth' => 'AuthController',
	'password' => 'Auth\PasswordController',
]);
*/
