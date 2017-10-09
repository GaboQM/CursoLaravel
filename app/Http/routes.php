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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['web']],function(){
//route::get('panel','AdministratorController@panel');
//route::get('access','AdministratorController@access');
//route::get('repors','AdministratorController@repors');
		
		route::get('dashboard','DesktopDashboardController@index');
		//route::get('modelweb','DesktopDashboardController@modelweb');
		//route::get('product','ProductController@index');
			route::resource('product','ProductController');
	
});

