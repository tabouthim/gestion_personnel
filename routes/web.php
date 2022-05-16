<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;
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

Route::get('/tableaudebord', 'App\Http\Controllers\tableaudebordController@dashbord')->name('tableau_de_bord');
Route::get('/annuaireemployes','App\Http\Controllers\employesController@employe' );
Route::get('/gestiondepaie', 'App\Http\Controllers\gestiondepaieController@paie');
Route::get('/salaire', 'App\Http\Controllers\salaireController@salaire');
Route::get('/heuredetravail', 'App\Http\Controllers\heuredetravailController@heure');
Route::get('/licenciement','App\Http\Controllers\licenciementController@licenciement');
Route::get('/tableaudepresence', 'App\Http\Controllers\tableaudepresenceController@presence');
Route::get('/conge','App\Http\Controllers\congeController@conge');
Route::get('/emploie','App\Http\Controllers\emploieController@emploie');
Route::get('/evenement', 'App\Http\Controllers\evenementController@evenement');

/* debut des routes du departement */
route::get('/search','App\Http\Controllers\departementController@search');
Route::get('/departement','App\Http\Controllers\departementController@departement')->name('liste_departements');
Route::post('/departement/create','App\Http\Controllers\departementController@save_departement')->name('create.departement');
Route::get('/ajouterdepartement', 'App\Http\Controllers\ajouterdepartementController@ajouterdepartement');
route::get('/departement/show/{id}','App\Http\Controllers\departementController@show')->name('departement.show');
route::post('/departement/update','App\Http\Controllers\departementController@update')->name('departement.update');
route::post('/departement/delete/','App\Http\Controllers\departementController@delete')->name('departement.delete');
route::get('/departement/destroy/{id}','App\Http\Controllers\departementController@showDelete')->name('show.delete');
/* fin des routes du departement */

/* debut des routes du licenciement */
Route::get('/licenciement','App\Http\Controllers\licenciementController@licenciement' )->name('liste_licenciement');
Route::post('/licenciement/create','App\Http\Controllers\licenciementController@save_licenciement')->name('create.licenciement');
route::get('/licenciement/show/{id}','App\Http\Controllers\licenciementController@show')->name('licenciement.show');
route::post('/licenciement/update','App\Http\Controllers\licenciementController@update')->name('licenciement.update');
/*fin des routes du licenciement*/


/* debut des routes employes*/
Route::get('/annuaireemployes','App\Http\Controllers\employeController@employe' )->name('liste_employe');
route::get('/employe/destroy/{id}','App\Http\Controllers\employeController@showDelete')->name('show.delete');
route::get('/employe/show/{id}','App\Http\Controllers\employeController@show')->name('employe.show');
route::get('/employe/view/','App\Http\Controllers\employeController@view')->name('employe.view');
Route::post('/employe/create','App\Http\Controllers\employeController@save_employe')->name('create.employe');
route::post('/employe/update','App\Http\Controllers\employeController@update')->name('employe.update');
route::post('/employe/delete','App\Http\Controllers\employeController@delete')->name('employe.delete');

/*fin des routes employes*/


/* debut des routes conges*/
Route::get('/conge','App\Http\Controllers\congeController@conge' )->name('liste_conge');
Route::post('/conge/create','App\Http\Controllers\congeController@save_conge')->name('create.conge');
route::get('/conge/destroy/{id}','App\Http\Controllers\congeController@showDelete')->name('show.conge');
route::post('/conge/delete','App\Http\Controllers\congeController@delete')->name('conge.delete');
route::get('/conge/show/{id}','App\Http\Controllers\congeController@show')->name('conge.show');
route::post('/conge/update','App\Http\Controllers\congeController@update')->name('conge.update');
/*fin des routes conges*/


/* debut des routes salaires*/
Route::get('/salaire','App\Http\Controllers\salaireController@salaire' )->name('liste_salaire');
Route::post('/salaire/create','App\Http\Controllers\salaireController@save_salaire')->name('create.salaire');
route::get('/salaire/destroy/{id}','App\Http\Controllers\salaireController@showDelete')->name('show.salaire');
route::post('/salaire/delete','App\Http\Controllers\salaireController@delete')->name('salaire.delete');
route::get('/salaire/show/{id}','App\Http\Controllers\salaireController@show')->name('salaire.show');
route::post('/salaire/update','App\Http\Controllers\salaireController@update')->name('salaire.update');
/*fin des routes salaires*/


/*authentification*/
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* fin authentification*/
