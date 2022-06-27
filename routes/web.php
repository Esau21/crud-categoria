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
    return view('layouts.template');
});

Route::get('/categories', 'CategoriesController@index')->name('categories');
Route::get('/categories/create', 'CategoriesController@create')->name('categoria.crear');
Route::post('/categories/registrar', 'CategoriesController@store');
Route::get('/categories/{id}/edit', 'CategoriesController@edit')->name('categories.editar');
Route::put('categories/{id}','CategoriesController@update');
Route::delete('/categories/{id}/eliminar', 'CategoriesController@destroy');

