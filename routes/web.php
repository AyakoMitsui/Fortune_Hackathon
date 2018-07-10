<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|s.
*/
Route::get('/','ItemsController@index');

Route::resource('men', 'MenController');
Route::resource('women', 'WomenController');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// Login authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::post('cart/{id}', 'CartsController@store')->name('carts.store');



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('carts', 'CartsController@index')->name('carts.index');


Route::delete('carts', 'CartsController@destroy')->name('carts.discart');


?>