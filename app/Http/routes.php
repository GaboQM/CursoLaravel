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
//rutas con parámetros y rutas con restricciones 0 a 9
/*	route::get('usuario/{codigo}',function($codigo){
		return 'usuario= '.$codigo;
	})
	//->where('codigo','[0-9]+');
	
	->where('codigo','[A-Za-z]+');
	;
	//rutas con restricciones*/

	route::get('producto','ProductoProductoController@index');
	route:: resource("marca",'ProductoMarcaController');
});

