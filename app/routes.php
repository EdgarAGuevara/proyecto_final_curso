<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	// return View::make('hello');
	return Redirect::route('login');
});

/*Recursos Generales*/

Route::get('/main',array('as' =>'main' ,'uses' =>'HomeController@main'));
/*Recursos Generales*/

/*Seccion recurso de usuario*/
Route::get('/login',array('as' =>'login' ,'uses' =>'UsuariosController@login'));
	// Pag donde se valida
Route::post('/auth',array('as' =>'auth' ,'uses' =>'UsuariosController@auth'));

Route::get('/logout',array('as' =>'logout' ,'uses' =>'UsuariosController@logout'));

Route::resource('usuarios', 'UsuariosController');
/*Seccion recurso de usuario*/

/*Seccion recurso de contacto*/
Route::get('/contactos/create/{id}',array('as' =>'contactos.create' ,'uses' =>'ContactosController@create'));

Route::resource('contactos', 'ContactosController', array('except' => array('create')));
/*Seccion recurso de contacto*/

/*Seccion recurso de telefono*/
Route::get('/telefonos/create/{id}',array('as' =>'telefonos.create' ,'uses' =>'TelefonosController@create'));

Route::resource('telefonos', 'TelefonosController', array('except' => array('create')));
/*Seccion recurso de telefono*/
