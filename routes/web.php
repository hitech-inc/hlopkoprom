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

// frontend
Route::get('/', 'SiteController@index');
Route::get('/about', 'SiteController@about');
Route::get('/aboutTest', 'SiteController@aboutTest');
Route::get('/products', 'SiteController@products');
Route::get('/contacts', 'SiteController@contacts');
Route::post('/contacts', [
	'uses'  => 'ContactController@store',
	'as' => 'contact.store'
]);
Route::auth();

// backend
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

	Route::get('/', function() {
			if(view()->exists('backend.index')) {
				$data = ['title' => 'Панель администратора АХБК'];
				return view('backend.index', $data);
			}
	});

	Route::group(['prefix' => 'home'], function() {
	    Route::get('/', ['uses' => 'BackendController@home', 'as' => 'home']);
	    Route::match(['get', 'post', 'delete'], '/edit/{id}', ['uses' => 'BackendController@homeEdit', 'as' => 'homeEdit']);
	    Route::post('updateHome',['uses' => 'BackendController@homeUpdate', 'as' => 'homeUpdate']);
	});

    Route::group(['prefix' => 'about'], function() {
        Route::get('/', ['uses' => 'AboutController@about', 'as' => 'about']);
        Route::match(['get', 'post'], '/add', ['uses' => 'AboutController@aboutAdd', 'as' => 'aboutAdd']);
        Route::match(['get', 'post', 'delete'], '/edit/{id}', ['uses' => 'AboutController@aboutEdit', 'as' => 'aboutEdit']);
		Route::post('saveAbout',['uses' => 'AboutController@aboutSave', 'as' => 'aboutSave']);
		Route::post('updateAbout',['uses' => 'AboutController@aboutUpdate', 'as' => 'aboutUpdate']);
		Route::post('/delete', 'AboutController@aboutDelete');
    });

    Route::group(['prefix' => 'contacts'], function() {
        Route::get('/', ['uses' => 'BackendController@contacts', 'as' => 'contacts']);
        Route::match(['get', 'post', 'delete'], '/edit/{id}', ['uses' => 'BackendController@contactEdit', 'as' => 'contactEdit']);
       	Route::post('updateContact',['uses' => 'BackendController@contactUpdate', 'as' => 'contactUpdate']);
    });

    Route::group(['prefix' => 'products'], function() {
        Route::get('/', ['uses' => 'BackendController@products', 'as' => 'products']);
        Route::post('/textBlockUpdate', ['uses' => 'BackendController@textBlockUpdate', 'as' => 'productsUpdate']);
    });


});
