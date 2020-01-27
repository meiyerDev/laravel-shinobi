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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){
	// Roles
	Route::resource('roles','RoleController');

	// Products
	Route::post('products/store','ProductsController@store')->name('products.store')
			->middleware('can:products.create');

	Route::get('products','ProductsController@index')->name('products.index')
			->middleware('can:products.index');

	Route::get('products/create','ProductsController@create')->name('products.create')
			->middleware('can:products.create');

	Route::put('products/{product}','ProductsController@update')->name('products.update')
			->middleware('can:products.edit');

	Route::get('products/{product}','ProductsController@show')->name('products.show')
			->middleware('can:products.show');

	Route::delete('products/{product}','ProductsController@destroy')->name('products.destroy')
			->middleware('can:products.destroy');

	Route::get('products/edit/{product}','ProductsController@edit')->name('products.edit')
			->middleware('can:products.edit');

	// Users
	Route::get('users','UserController@index')->name('users.index')
			->middleware('can:users.index');

	Route::put('users/{user}','UserController@update')->name('users.update')
			->middleware('can:users.edit');

	Route::get('users/{user}','UserController@show')->name('users.show')
			->middleware('can:users.show');

	Route::delete('users/{user}','UserController@destroy')->name('users.destroy')
			->middleware('can:users.destroy');

	Route::get('users/edit/{user}','UserController@edit')->name('users.edit')
			->middleware('can:users.edit');

});
