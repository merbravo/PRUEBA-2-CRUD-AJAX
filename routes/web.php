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



Route::group(['middleware' => 'auth'], function () {
    
});


Route::get('/home', 'HomeController@index')->name('home');

// Marca
Route::get('/marcas', function(){
    return view('Marca.marca');
});
Route::resource('/marca', 'MarcaController');

// Auto
Route::resource('/autos', 'AutoController');
Route::get('/auto', 'AutoController@listarAuto');