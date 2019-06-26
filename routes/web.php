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

Route::get('insert', function () {
    DB::insert('insert into staffs');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth:web']], function () {
    Route::resource('depart', 'DepartController');
});

Route::group(['middleware' => ['auth:web']], function () {
    Route::get('user', 'UserController@index')->name('user.index');
    Route::match(array('PUT', 'PATCH'), 'user/{user}', 'UserController@update')->name('user.update');
    Route::get('user/{user}', 'UserController@show')->name('user.show');
    Route::get('user/{user}/edit', 'UserController@edit')->name('user.edit');
    Route::delete('user/{user}', 'UserController@destroy')->name('user.destroy');
    Route::post('user', 'UserController@store')->name('user.store');
});
