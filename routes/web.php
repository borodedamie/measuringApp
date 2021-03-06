<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/showDetails/{id}', 'AdminController@showDetails')->name( 'admin.showDetails' );

Route::get('/', function() {
    return view('auth.register');
});

Route::get( '/male', 'MaleController@index' )->name( 'male.index' );
Route::post('/new-male', 'MaleController@store')->name( 'male.store' );


Route::get( '/female', 'FemaleController@index' )->name( 'female.index' );
Route::post( '/new-female', 'FemaleController@store' )->name( 'female.store' );

Route::post( '/customer', 'CustomerController@store')->name( 'customer.store' );
Route::post( '/update', 'CustomerController@update')->name( 'customer.update' );


Route::get( '/admin', 'AdminController@index' );

Route::get( '/test', 'AdminController@test' );

Route::get( '/newAdmin', 'AdminController@adminIndex' );

Route::get('/showDetail', 'AdminController@showDetails')->name('admin.details');

Route::get('/show/{id}', 'AdminController@show')->name('admin.show');

Route::post('/update/{id}', 'AdminController@update')->name( 'admin.update' );





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/edit', 'HomeController@loadEdit')->name('edit')->middleware('auth');

// Route::any('/new-male', 'MaleController@create')->name( 'create' );


