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
			Route::get('/payment-option', 'webController@paymentoption')->name('paymentoption');
			Route::get('/thank-you-booking', 'webController@thankyoubooking')->name('thankyoubooking');
			Route::get('/order-page', 'webController@orderpage')->name('orderpage');
			Route::get('/pricing-package', 'webController@pricingpackage')->name('pricingpackage');
		});

	//User

		Route::prefix('user')->namespace('user')->group(function(){

			Route::get('/', 'userController@index')->name('user.myaccount');
			Route::get('/personal-details', 'userController@personaldetails')->name('user.personaldetails');
			Route::get('/reset-password', 'userController@resetpassword')->name('user.resetpassword');
			Route::get('/transaction', 'userController@transaction')->name('user.transaction');
			Route::get('/favorites', 'userController@favorites')->name('user.favorites');
			Route::get('/messages', 'userController@messages')->name('user.messages');
			Route::get('/smiles', 'userController@smiles')->name('user.smiles');
			Route::get('/my-order-upcoming', 'userController@myorderupcoming')->name('user.myorderupcoming');
			Route::get('/my-order-deliver', 'userController@myorderdeliver')->name('user.myorderdeliver');
		});


	//Admin

		Route::prefix('admin')->namespace('admin')->group(function(){

			Route::get('/', 'adminController@index');
			Route::get('/edit-profile', 'adminController@editprofile')->name('user.editprofile');
			Route::get('/all-products', 'adminController@allproducts')->name('user.allproducts');
			Route::get('/transaction', 'adminController@transaction')->name('user.transaction');
			Route::get('/order-history', 'adminController@orderhistory')->name('user.orderhistory');
			Route::get('/manage-shipping', 'adminController@manageshipping')->name('user.manageshipping');
			Route::get('/add-product', 'adminController@addproduct')->name('user.addproduct');
			Route::get('/create-attribute', 'adminController@createattribute')->name('user.createattribute');
		});