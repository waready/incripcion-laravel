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



Route::group(['middleware' =>['web']], function() {
        route::get('dashboard','Desktop\AdministratorCont@index');
        route::resource('producto','Producto\ProductoController');
        route::resource('marca','Producto\MarcaController');
        route::get('create','Producto\ProductoController@create');
        route::get('excel','Producto\ProductoController@excel');
        
Route::auth();
Route::get('/','HomeController@index');
      

});

