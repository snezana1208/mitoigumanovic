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


Route::get('/parents', 'Parents_postController@index');
Route::get('/parents.create', 'Parents_postController@create');
Route::post('/parents.store', 'Parents_postController@store');


Route::get('/students', 'Students_postController@index');
Route::get('/students.create', 'Students_postController@create');
Route::post('/students.store', 'Students_postController@store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
