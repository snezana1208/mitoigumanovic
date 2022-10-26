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
Route::get('/dokumenta', 'PagesController@dokumenta');
Route::get('/istorijat', 'PagesController@istorijat');
Route::get('/zaposleni', 'PagesController@zaposleni');
Route::get('/savet_roditelja', 'PagesController@savet_roditelja');
Route::get('/biblioteka', 'PagesController@biblioteka');
Route::get('/letopis', 'PagesController@letopis');
Route::get('/galerija', 'PagesController@galerija');
Route::get('/vesti', 'PagesController@vesti');
Route::get('/termini', 'PagesController@termini');

Route::get('/kalendar', 'PagesController@kalendar');
Route::get('/zvono', 'PagesController@zvono');
Route::get('/jednosmenski', 'PagesController@jednosmenski');
Route::get('/raspored', 'PagesController@raspored');
Route::get('/rasporedimr', 'PagesController@rasporedimr');
Route::get('/rasporedisr', 'PagesController@rasporedisr');
Route::get('/vannastavne_aktivnosti', 'PagesController@vannastavne_aktivnosti');
Route::get('/produzeni_boravak', 'PagesController@produzeni_boravak');


Route::get('/djacki_parlament', 'PagesController@djacki_parlament');
Route::get('/zavrsni_ispit', 'PagesController@zavrsni_ispit');
Route::get('/takmicenja', 'PagesController@takmicenja');
Route::get('/ucenici_generacije', 'PagesController@ucenici_generacije');
Route::get('/upis_u_srednje_skole', 'PagesController@upis_u_srednje_skole');

Route::get('/otvorena_vrata', 'PagesController@otvorena_vrata');
Route::get('/rasporedi', 'PagesController@rasporedi');
Route::get('/rasporedikosj', 'PagesController@rasporedikosj');
Route::get('/rasporedisc', 'PagesController@rasporedisc');
Route::get('/spisak_udzbenika', 'PagesController@spisak_udzbenika');
Route::get('/upis_prvaka', 'PagesController@upis_prvaka');
Route::get('/psiholog_savetuje', 'PagesController@psiholog_savetuje');
Route::get('/pedagog_savetuje', 'PagesController@pedagog_savetuje');
Route::get('/upis', 'PagesController@upis');



Route::resource('/dashboard', 'DashboardController');

Route::get('/admin.letopis', 'LetopisController@index');
Route::get('/admin.letopis.create', 'LetopisController@create');
Route::post('/admin.letopis.store', 'LetopisController@store');
Route::get('/admin.letopis.show/{id}', 'LetopisController@show');
Route::get('/admin.letopis.edit/{id}', 'LetopisController@edit');
Route::put('/admin.letopis/{posts}', 'LetopisController@update');
Route::delete('/admin.letopis.destroy/{id}', 'LetopisController@destroy');
Route::post('/upload', 'LetopisController@uploadImage')->name('upload');


Route::get('/admin.vesti', 'VestiController@index');
Route::get('/admin.vesti.create', 'VestiController@create');
Route::post('/admin.vesti.store', 'VestiController@store');
Route::get('/admin.vesti.show/{id}', 'VestiController@show');
Route::get('/admin.vesti.edit/{id}', 'VestiController@edit');
Route::put('/admin.vesti/{posts}', 'VestiController@update');
Route::delete('/admin.vesti.destroy/{id}', 'VestiController@destroy');
Route::post('/upload', 'VestiController@uploadImage')->name('upload');


Route::get('/admin.takmicenja', 'TakmicenjaController@index');
Route::get('/admin.takmicenja.create', 'TakmicenjaController@create');
Route::post('/admin.takmicenja.store', 'TakmicenjaController@store');
Route::get('/admin.takmicenja.show/{id}', 'TakmicenjaController@show');
Route::get('/admin.takmicenja.edit/{id}', 'TakmicenjaController@edit');
Route::put('/admin.takmicenja/{posts}', 'TakmicenjaController@update');
Route::delete('/admin.takmicenja.destroy/{id}', 'TakmicenjaController@destroy');
Route::post('/upload', 'TakmicenjaController@uploadImage')->name('upload');


Route::get('/admin.upis_prvaka', 'UpisPrvakaController@index');
Route::get('/admin.upis_prvaka.create', 'UpisPrvakaController@create');
Route::post('/admin.upis_prvaka.store', 'UpisPrvakaController@store');
Route::get('/admin.upis_prvaka.show/{id}', 'UpisPrvakaController@show');
Route::get('/admin.upis_prvaka.edit/{id}', 'UpisPrvakaController@edit');
Route::put('/admin.upis_prvaka/{posts}', 'UpisPrvakaController@update');
Route::delete('/admin.upis_prvaka.destroy/{id}', 'UpisPrvakaController@destroy');
Route::post('/upload', 'UpisPrvakaController@uploadImage')->name('upload');


Route::get('/admin.savet_roditelja', 'SavetRoditeljaController@index');
Route::get('/admin.savet_roditelja.create', 'SavetRoditeljaController@create');
Route::post('/admin.savet_roditelja.store', 'SavetRoditeljaController@store');
Route::get('/admin.savet_roditelja.show/{id}', 'SavetRoditeljaController@show');
Route::get('/admin.savet_roditelja.edit/{id}', 'SavetRoditeljaController@edit');
Route::put('/admin.savet_roditelja/{posts}', 'SavetRoditeljaController@update');
Route::delete('/admin.savet_roditelja.destroy/{id}', 'SavetRoditeljaController@destroy');
Route::post('/upload', 'SavetRoditeljaController@uploadImage')->name('upload');


Route::get('/admin.zavrsni_ispit', 'ZavrsniIspitController@index');
Route::get('/admin.zavrsni_ispit.create', 'ZavrsniIspitController@create');
Route::post('/admin.zavrsni_ispit.store', 'ZavrsniIspitController@store');
Route::get('/admin.zavrsni_ispit.show/{id}', 'ZavrsniIspitController@show');
Route::get('/admin.zavrsni_ispit.edit/{id}', 'ZavrsniIspitController@edit');
Route::put('/admin.zavrsni_ispit/{posts}', 'ZavrsniIspitController@update');
Route::delete('/admin.zavrsni_ispit.destroy/{id}', 'ZavrsniIspitController@destroy');
Route::post('/upload', 'ZavrsniIspitController@uploadImage')->name('upload');


Route::get('/admin.ucenici_generacija', 'UceniciGeneracijaController@index');
Route::get('/admin.ucenici_generacija.create', 'UceniciGeneracijaController@create');
Route::post('/admin.ucenici_generacija.store', 'UceniciGeneracijaController@store');
Route::get('/admin.ucenici_generacija.show/{id}', 'UceniciGeneracijaController@show');
Route::get('/admin.ucenici_generacija.edit/{id}', 'UceniciGeneracijaController@edit');
Route::put('/admin.ucenici_generacija/{posts}', 'UceniciGeneracijaController@update');
Route::delete('/admin.ucenici_generacija.destroy/{id}', 'UceniciGeneracijaController@destroy');
Route::post('/upload', 'UceniciGeneracijaController@uploadImage')->name('upload');


Route::get('/admin.psiholog', 'PsihologController@index');
Route::get('/admin.psiholog.create', 'PsihologController@create');
Route::post('/admin.psiholog.store', 'PsihologController@store');
Route::get('/admin.psiholog.show/{id}', 'PsihologController@show');
Route::get('/admin.psiholog.edit/{id}', 'PsihologController@edit');
Route::put('/admin.psiholog/{posts}', 'PsihologController@update');
Route::delete('/admin.psiholog.destroy/{id}', 'PsihologController@destroy');
Route::post('/upload', 'PsihologController@uploadImage')->name('upload');


Route::get('/admin.pedagog', 'PedagogController@index');
Route::get('/admin.pedagog.create', 'PedagogController@create');
Route::post('/admin.pedagog.store', 'PedagogController@store');
Route::get('/admin.pedagog.show/{id}', 'PedagogController@show');
Route::get('/admin.pedagog.edit/{id}', 'PedagogController@edit');
Route::put('/admin.pedagog/{posts}', 'PedagogController@update');
Route::delete('/admin.pedagog.destroy/{id}', 'PedagogController@destroy');
Route::post('/upload', 'PedagogController@uploadImage')->name('upload');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
