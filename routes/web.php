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

Route::get('/','StudentsController@index');
Route::get('back','StudentsController@back');
Route::get('create','StudentsController@create');
Route::post('insert', 'StudentsController@insert');
Route::get('delete/{id}','StudentsController@delete');
Route::get('edit/{id}','StudentsController@edit');
Route::post('update/{id}', 'StudentsController@update');
Route::get('read/{id}','StudentsController@read');

