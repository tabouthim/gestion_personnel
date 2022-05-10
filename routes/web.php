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
/*Route::get('/login', function () {
    return view('login');
});*/
Route::get('/', 'App\Http\Controllers\tableaudebordController@dashbord');
Route::get('/tableaudebord', 'App\Http\Controllers\tableaudebordController@dashbord');
Route::get('/annuaireemployes','App\Http\Controllers\employesController@employe' );
Route::get('/gestiondepaie', 'App\Http\Controllers\gestiondepaieController@paie');
Route::get('/heuredetravail', 'App\Http\Controllers\heuredetravailController@heure');
Route::get('/licenciement','App\Http\Controllers\licenciementController@licenciement');
Route::get('/recrutement','App\Http\Controllers\recrutementController@recrutement');
Route::get('/tableaudepresence', 'App\Http\Controllers\tableaudepresenceController@presence');
Route::get('/ajouteremploye', 'App\Http\Controllers\ajouteremployeController@employe');

/* debut des routes du departement */
Route::get('/departement','App\Http\Controllers\departementController@departement')->name('liste_departements');
Route::post('/departement/create','App\Http\Controllers\departementController@save_departement')->name('create.departement');
Route::get('/ajouterdepartement', 'App\Http\Controllers\ajouterdepartementController@ajouterdepartement');
route::get('/departement/show/{id}','App\Http\Controllers\departementController@show')->name('departement.show');
route::post('/departement/update','App\Http\Controllers\departementController@update')->name('departement.update');
route::post('/departement/delete/','App\Http\Controllers\departementController@delete')->name('departement.delete');
route::get('/departement/destroy/{id}','App\Http\Controllers\departementController@showDelete')->name('show.delete');
/* fin des routes du departement */

/* debut des routes du licenciement */
Route::get('/licenciement','App\Http\Controllers\licenciementController@licenciement')->name('liste_licenciement');
Route::post('/licenciement/create','App\Http\Controllers\licenciementController@save_licenciement')->name('create.licenciement');



/* fin des routes du licenciement*/


/* debut des routes employes*/
Route::get('/annuaireemployes','App\Http\Controllers\employeController@employe' )->name('liste_employe');
route::get('/employe/destroy/{id}','App\Http\Controllers\employeController@showDelete')->name('show.delete');
route::get('/employe/show/{id}','App\Http\Controllers\employeController@show')->name('employe.show');
route::get('/employe/view/{id}','App\Http\Controllers\employeController@view')->name('employe.view');
Route::post('/employe/create','App\Http\Controllers\employeController@save_employe')->name('create.employe');
route::post('/departement/update','App\Http\Controllers\employeController@update')->name('employe.update');
route::post('/employe/delete/','App\Http\Controllers\employeController@delete')->name('employe.delete');

/*fin des routes employes*/
