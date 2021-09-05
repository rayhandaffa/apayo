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

Route::post('/', 'admin\CrudController@update_profile');

Route::get('/berita/create','CrudController@create');
Route::post('/berita','CrudController@store');
Route::get('/berita','CrudController@index');
Route::get('/berita/{berita_id}','CrudController@show');
Route::get('/berita/{berita_id}/edit','CrudController@edit');
Route::put('/berita/{berita_id}','CrudController@update');
Route::delete('/berita/{berita_id}','CrudController@destroy');
