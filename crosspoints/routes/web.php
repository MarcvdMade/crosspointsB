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

Auth::routes();

//information routes
Route::post('information', 'InformationController@store');
Route::put('information/{id}', 'InformationController@update');
Route::get('information', 'InformationController@index')->name('information');
Route::get('information/{id}', 'InformationController@show')->name('info-show');
Route::get('information.create', 'InformationController@create')->name('info-create');
Route::get('information/{id}/edit', 'InformationController@edit')->name('info-edit');

Route::get('/home', 'HomeController@index')->name('home');
