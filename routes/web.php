<?php

//dd(env('APP_VERSION'));
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


/*Route::get('/', function(){
	return view('welcome');
	});
*/

/*
use App\User;
Route::get('pruebasUser', function(){

	$users = User::all();
    dd($users);

});
*/

//Route::get('/','HomeController@home');
Route::get('/','PagesController@home');
Route::get('contact','PagesController@contact');
Route::get('about','PagesController@about');
Route::get('create','TicketsController@index');
Route::get('mostrarUsuarios','UsuariosController@showUrs');
Route::get('mostrarNombre','PagesController@mostrarNombre');
Route::get('crear','PagesController@pruebaRutas');

//ruta dinamica con parametros
Route::get('crear/{id}/{slug?}','PagesController@rutaDinamica')->where('id','[0-9]+');

//ruta post para crear un ticket
Route::post('create','TicketsController@create');