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

Route::get('/over', 'AboutController@index')->name('about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/meldentest','FormController@index')->name('meldentest');
Route::get('/meldentestinfo','FormController@indexinfo')->name('meldentestinfo');
Route::get('/meldentestform','FormController@indexform')->name('meldentestform');
Route::get('/meldentestopen','FormController@indexopen')->name('meldentestopen');
Route::get('/testtrue')->name('testtrue');
Route::get('/testfalse')->name('testfalse');
Route::post('/vragenlijst','FormController@checkscore')->name('vragenlijst');
Route::post('/goback','FormController@goback')->name('goback');

//profile routes
Route::patch('profiel/{user:name}', 'ProfilesController@update');
Route::get('profiel/{user:name}', 'ProfilesController@show')->name('profile');
Route::get('profiel/{user:name}/wijzig', 'ProfilesController@edit')->name('edit-user');

//melding
Route::get('melding/meld', 'MeldController@index')->name('meld');
Route::post('create-post', 'MeldController@createMeld')->name('meld.create');
Route::get('melding/meldingen', 'Meldcontroller@getMeld')->name('meldingen');

//vragenlijst
Route::patch('vragenlijst', 'VraagController@updateVraag');
Route::get('vragenlijst', 'VragenlijstController@index')->name('vragenlijst');
Route::get('vraag', 'VraagController@index')->name('vraag');
Route::post('create-vraag', 'VraagController@createVraag')->name('vraag.create');
Route::get('vragenlijst', 'VraagController@GetVraag')->name('vragenlijst');
Route::get('delete-vraag/{id}', 'VraagController@deleteVraag');
Route::get('edit-vraag/{id}', 'VraagController@editVraag')->name('edit-vraag');

//admin routes
Route::middleware('can:is_admin')->group(function () {
    Route::get('admin', 'AdminController@index')->name('admin');
    Route::get('admin/ongewenst-gedrag', 'AdminController@problem')->name('problem');

    //overzicht VP
    Route::get('admin/vertrouwenspersonen', 'OverviewVPController@index')->name('counselors');
    Route::delete('admin/vertrouwenspersonen/{id}', 'OverviewVPController@destroy')->name('delete-counselor');

    //toevoegen VP
    Route::get('admin/registerVP', 'VPController@index')->name('registerVP');
    Route::post('admin/vertrouwenspersonen', 'VPController@store');

    //overzicht admins
    Route::get('admin/admins', 'OverviewAdminController@index')->name('admins');
    Route::delete('admin/admins/{id}', 'OverviewAdminController@destroy')->name('delete-admin');

    //toevoegen Admin
    Route::get('admin/registerAdmin', 'MakeAdminController@index')->name('registerAdmin');
    Route::post('admin/admins', 'MakeAdminController@store');


    //toevoegen bedrijf
    Route::get('/company','CompanyController@index')->name('company');
    Route::post('/createcompany', '\App\Http\Controllers\CompanyController@store')->name('createcompany');

    //informatie pagina admin
    //create
    Route::get('informatie/create', 'InformationController@create')->name('info-create');
    Route::post('informatie', 'InformationController@store');
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
});

    //information routes
    //index
    Route::get('informatie', 'InformationController@index')->name('information');
    //show
    Route::get('informatie/{id}', 'InformationController@show')->name('info-show');

//counselor routes
Route::middleware('can:is_counselor')->group(function () {
    Route::get('vertrouwenspersoon', 'CounselorController@index')->name('vertrouwenspersoon');
});



