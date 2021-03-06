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

Route::get('mostrarUsuarios','UsuariosController@showUrs');
Route::get('mostrarNombre','PagesController@mostrarNombre');


//ruta dinamica con parametros
//Route::get('crear/{id}/{slug?}','PagesController@rutaDinamica')->where('id','[0-9]+');

//ruta post para crear un ticket
//Route::post('create','TicketsController@create');


//app tickets-------------------------------------------------
Route::get('/','PagesController@home');
Route::get('/contact','PagesController@contact');
Route::get('/about','PagesController@about');

//pag para crear un ticket
Route::get('/create','TicketsController@create');

//guarda un ticket en la BD
Route::post('/create','TicketsController@store');

//muestra tickets
Route::get('/tickets','TicketsController@index');

//muestra un ticket
Route::get('/ticket/{slug?}','TicketsController@show');

//edita un ticket
Route::get('/ticket/{slug?}/edit','TicketsController@edit');

//borra un ticket
Route::post('/ticket/{slug?}/edit','TicketsController@update');

//borra un ticket
Route::post('/ticket/{slug?}/delete','TicketsController@destroy');

//crea un comentario
Route::post('/comment','CommentsController@newComment');