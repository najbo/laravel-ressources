<?php

use App\Ressource;
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


Route::get('/', 'HomepageController@index');

Route::get('ressources', 'RessourceController@index')->name('ressources');
Route::get('iso', 'isoController@index')->name('iso');
Route::get('absences', 'absenceController@index')->name('absences');
Route::get('reparations', 'reparationController@index')->name('reparations');

Route::get('laravel-version', function()
	{
		$laravel = app();
		return "Your Laravel version is ".$laravel::VERSION;
	});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
