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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
})->middleware('guest');

Auth::routes();

Route::get('/', 'StaticController@staticIndex')->name('landing');

/*
* Grupo de rutas de usuarios
*/
Route::middleware(['auth', 'role:user'])->group(function () {
	Route::get('/inicio', 'HomeController@index')->name('inicio');
	Route::get('/perfil', 'UserController@showprofile')->name('perfil');
	Route::get('/perfil/edit', 'UserController@editProfileUser')->name('edit');
	Route::post('/usuarioos/{user}', 'UserController@updateByUser')->name('usuarios.updateByuser');
	Route::post('/updateProfile/{user}', 'UserController@updateProfile')->name('user.updateProfile');
	Route::post('/changePassword/{user}', 'UserController@changePassword')->name('user.changePassword');
	Route::post('/products/reserve/{user}/{product}', 'ProductsController@reserveProduct');
	Route::get('/reserves', 'ProductsController@showReserves')->name('reserves');
});

Route::get('/perfil', 'UserController@showprofile')->name('perfil')->middleware('auth');
Route::post('/updateProfile/{user}', 'UserController@updateProfile')->name('user.updateProfile')->middleware('auth');;
Route::post('/changePassword/{user}', 'UserController@changePassword')->name('user.changePassword')->middleware('auth');

/*
* Grupo de rutas de administrador
*/
Route::middleware(['auth', 'role:admin'])->group(function () {

	Route::get('/home', 'HomeController@indexAdmin')->name('home');
	// Rutas de  Usuarios
	Route::get('/usuarios', 'UserController@index')->name('usuarios.index');
	Route::get('/usuarios/create', 'UserController@create')->name('usuarios.create');
	Route::post('/usuarios', 'UserController@store')->name('usuarios.store');
	Route::get('/usuarios/{usuario}/edit', 'UserController@edit')->name('usuarios.edit');
	Route::get('/usuario/{usuario}', 'UserController@show')->name('usuarios.show');
	Route::put('/usuarios/{usuario}', 'UserController@update')->name('usuarios.update');
	Route::delete('/usuarios/{usuario}', 'UserController@destroy')->name('usuarios.destroy');
	Route::post('/usuarios/{usuario}/update', 'UserController@UpdateUser');
	Route::get('getroles', 'SearchController@getroles')->name('getroles');

	// Rotuas de productos
	Route::get('/products', 'ProductsController@index')->name('products.index');
	Route::get('/products/create', 'ProductsController@create')->name('products.create');
	Route::post('/products', 'ProductsController@store')->name('products.store');
	Route::get('/products/{id}/edit', 'ProductsController@edit')->name('products.edit');
	Route::put('/products/{id}', 'ProductsController@update')->name('product.update');
	Route::delete('/products/{id}', 'ProductsController@destroy')->name('product.destroy');

	//Reportes
	Route::get('/reserveReports', 'ProductsController@allRerserves')->name('allreserves');
	Route::get('/reserve-details/{id}', 'ProductsController@getReserveDetails')->name('detailsreserves');
	Route::get('/reservations-per-day', 'ProductsController@reservationsPerDay')->name('products.reservationsPerDay');
	Route::post('/get-charts', 'ProductsController@getCharts');
	Route::post('/change-status/{id}', 'ProductsController@changeStatus');
});

/*
* Rutas de -maquetación-
*/
Route::get('/static/products', 'StaticController@staticProducts');
Route::get('/static/profile', 'StaticController@staticProfile');
Route::get('/static/profile/edit', 'StaticController@staticEditProfile')->name('editProfile');
Route::get('/static/login', 'StaticController@staticLogin');
Route::get('/static/signup', 'StaticController@staticSignup');
