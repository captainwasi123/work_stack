<?php

use Illuminate\Support\Facades\Route;

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

	// Web-Routes
		
		Route::namespace('web')->group(function(){

			Route::get('/', 'webController@index')->name('home');
			Route::get('/modal', 'webController@modal')->name('modal');
			Route::get('/services', 'webController@services')->name('services');
			Route::get('/comparison-table', 'webController@comparisontable')->name('comparisontable');
		});
