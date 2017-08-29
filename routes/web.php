<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/jobs','JobsController@GetJobs');
Route::get('/job/{id}','JobsController@GetJob');
Route::get('/nonprofits','JobsController@GetNonprofits');
Route::get('/volunteers','JobsController@GetVolunteers');
Route::get('/category/{name}','JobsController@GetCategory');

Route::group(['prefix' => 'admin'], function(){
	Route::resource('user','UserController');
	Route::resource('job','JobController');
	Route::resource('nonprofit','NonprofitController');
	Route::resource('category','CategoryController');
});

Route::get('/', function () {
    return view('index');
});
