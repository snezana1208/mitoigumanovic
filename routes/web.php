<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/about', 'PagesController@about');
Route::get('/istorijat', 'PagesController@istorijat');
Route::get('/zaposleni', 'PagesController@zaposleni');
Route::get('/savet_roditelja', 'PagesController@savet_roditelja');
Route::get('/biblioteka', 'PagesController@biblioteka');
Route::get('/letopis', 'PagesController@letopis');
Route::get('/galerija', 'PagesController@galerija');

Route::get('/kalendar', 'PagesController@kalendar');
Route::get('/zvono', 'PagesController@zvono');
Route::get('/raspored', 'PagesController@raspored');
Route::get('/vannastavne_aktivnosti', 'PagesController@vannastavne_aktivnosti');
Route::get('/produzeni_boravak', 'PagesController@produzeni_boravak');

Route::get('/djacki_parlament', 'PagesController@djacki_parlament');
Route::get('/zavrsni_ispit', 'PagesController@zavrsni_ispit');
Route::get('/takmicenja', 'PagesController@takmicenja');
Route::get('/ucenici_generacije', 'PagesController@ucenici_generacije');

Route::get('/otvorena_vrata', 'PagesController@otvorena_vrata');
Route::get('/rasporedi', 'PagesController@rasporedi');
Route::get('/spisak_udzbenika', 'PagesController@spisak_udzbenika');
Route::get('/upis_prvaka', 'PagesController@upis_prvaka');
Route::get('/psiholog_savetuje', 'PagesController@psiholog_savetuje');
Route::get('/pedagog_savetuje', 'PagesController@pedagog_savetuje');




Route::get('/parents', 'Parents_postController@index');
Route::get('/parents.create', 'Parents_postController@create');
Route::post('/parents.store', 'Parents_postController@store');


Route::get('/students', 'Students_postController@index');
Route::get('/students.create', 'Students_postController@create');
Route::post('/students.store', 'Students_postController@store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
