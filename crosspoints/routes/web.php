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

Route::get('/home', 'HomeController@index')->name('home');

//profile routes
Route::patch('profiles/{user}', 'ProfilesController@update');
Route::get('profiles/{user}', 'ProfilesController@show')->name('profile');
Route::get('profiles/{user}/edit', 'ProfilesController@edit');

//information routes

//index
Route::get('information', 'InformationController@index')->name('information');

//create
Route::get('information.create', 'InformationController@create')->name('info-create');
Route::post('information', 'InformationController@store');

//show
Route::get('information/{id}', 'InformationController@show')->name('info-show');

//edit
Route::get('information/{id}/edit', 'InformationController@edit')->name('info-edit');
Route::put('information/{id}', 'InformationController@update');

//delete
Route::delete('information/{id}', 'InformationController@destroy');

//add tip
Route::get('tip', 'TipController@create')->name('tip-create');
Route::post('tip/save', 'TipController@store')->name('tip-save');

//add link
Route::get('link', 'LinkController@create')->name('link-create');
Route::post('link/save', 'LinkController@store')->name('link-save');

