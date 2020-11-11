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
Route::get('/meldentest','FormController@index')->name('meldentest');
Route::get('/testtrue')->name('testtrue');
Route::get('/testfalse')->name('testfalse');
Route::get('/company','CompanyController@index')->name('company');
Route::post('/createcompany', '\App\Http\Controllers\CompanyController@store')->middleware('auth')->name('createcompany');
Route::post('/checkscore','FormController@checkscore')->name('checkscore');
Route::post('/goback','FormController@goback')->name('goback');
//profile routes
Route::patch('profiel/{user:name}', 'ProfilesController@update');
Route::get('profiel/{user:name}', 'ProfilesController@show')->name('profile');
Route::get('profiel/{user:name}/wijzig', 'ProfilesController@edit');

//information routes
//index
Route::get('informatie', 'InformationController@index')->name('information');
//create
Route::get('informatie/create', 'InformationController@create')->name('info-create');
Route::post('informatie', 'InformationController@store');
//show
Route::get('informatie/{id}', 'InformationController@show')->name('info-show');
//edit
Route::get('informatie/{id}/wijzig', 'InformationController@edit')->name('info-edit');
Route::put('informatie/{id}', 'InformationController@update');
//delete
Route::delete('informatie/{id}', 'InformationController@destroy');
//add tip
Route::get('tip', 'TipController@create')->name('tip-create');
Route::post('tip/save', 'TipController@store')->name('tip-save');
//add link
Route::get('link', 'LinkController@create')->name('link-create');
Route::post('link/save', 'LinkController@store')->name('link-save');

//admin routes
Route::middleware('can:is_admin')->group(function () {
    Route::get('admin', 'AdminController@index')->name('admin');
});

//counselor routes
Route::middleware('can:is_counselor')->group(function () {
    Route::get('vertrouwenspersoon', 'CounselorController@index')->name('vertrouwenspersoon');
});

