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
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
})->name('index');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Auth::routes();

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

/* RECETAS */
Route::get('/recetas', 'RecetasController@index');
Route::get('/recetas/create', 'RecetasController@create');
Route::post('/recetas', 'RecetasController@store')->name('recetasStore');
Route::get('/recetas/{id}/edit', 'RecetasController@edit');
Route::patch('/recetas/{id}', 'RecetasController@update');
Route::delete('/recetas/{id}', 'RecetasController@destroy');