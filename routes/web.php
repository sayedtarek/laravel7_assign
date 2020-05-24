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

Route::get('/', function () {
    return view('welcome');
});

Route::post('post/contact', 'SiteController@store')->name('contact.store');


if (!defined('ADMIN_PATH')) {
	define('ADMIN_PATH', 'admin');
}


Route::group(['prefix'=>ADMIN_PATH],function(){

	Route::group(['namespace'=>'Admin'],function(){

		Route::get('/admin', 'DashboardController@index');
		
		Route::group(['prefix' => '/auth'], function() {
            Route::post('/login', 'AuthController@login');
        });

		Route::get('/'		          , 'AuthController@loginIndex');
        Route::get('/login'           , 'AuthController@loginIndex')->name('login');
        Route::get('/logout'          , 'AuthController@logout');
        

		Route::get('/dashboard' , 'DashboardController@index');

		Route::resource('complaints','ComplaintsController');
		Route::get('complaint/search','ComplaintsController@search');
		

	});
});



