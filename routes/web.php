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

Route::get('/', function () {
	return view('idioma');
});

Route::get('lang/{lang}', function ($lang) {
	session(['lang' => $lang]);
	return \Redirect::back();
})->where([
	'lang' => 'es|en|fr|it'
]);

Route::get('/inicio', function () {
	return view('inicio');
});

Route::get('/nosotros', function () {
	return view('nosotros');
});

Route::get('/mundo', function () {
	return view('mundo');
});

Route::get('/actividades', 'ActividadesController@getActividades');

Route::get('/trabajo', function () {
	return view('trabajo');
});

Route::get('/blog',	'BlogController@index');

Route::get('/contacto', function () {
	return view('contacto');
});

Route::get('/mail', [
	'uses' => 'MailController@create'
]);

Route::post('/mail', [
	'uses' => 'MailController@store',
	'as' => 'mail.store'
]);

Route::get('/admin', 'ActividadesController@index')->middleware('auth');

Route::resource('blogs', 'BlogController@store');

Route::resource('actividadesUpdate', 'ActividadesController@update');

Route::auth();