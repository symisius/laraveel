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

Route::get('/', 'CreatesController@index');
Route::get('/create', function(){
  return view('create');
});
Route::post('/insert', 'CreatesController@add');
Route::get('/update/{id}', 'CreatesController@update');
Route::post('/edit/{id}', 'CreatesController@edit');
Route::get('/view/{id}', 'CreatesController@view');
Route::get('/delete/{id}', 'CreatesController@delete');
