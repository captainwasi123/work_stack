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


	//seller

		Route::prefix('seller')->namespace('seller')->group(function(){

			Route::get('/', 'sellerController@index');
			Route::get('/edit-profile', 'sellerController@editprofile')->name('seller.editprofile');
			Route::get('/all-products', 'sellerController@allproducts')->name('seller.allproducts');
			Route::get('/transaction', 'sellerController@transaction')->name('seller.transaction');
			Route::get('/order-history', 'sellerController@orderhistory')->name('seller.orderhistory');
			Route::get('/manage-shipping', 'sellerController@manageshipping')->name('seller.manageshipping');
			Route::get('/add-product', 'sellerController@addproduct')->name('seller.addproduct');
			Route::get('/create-attribute', 'sellerController@createattribute')->name('seller.createattribute');
		});
