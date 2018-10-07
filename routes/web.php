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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/patient/{id}', 'PatientController@index')->name('patient');
Route::get('/doctor/{id}', 'DoctorController@index')->name('doctor');
Route::get('/doctor/{doc_id}/patient/{pa_id}', 'PatientController@detail')->name('detail');
Route::get('/patient/{id}/upload/{task_id}', 'RecordController@index')->name('upload');
Route::post('/patient/{id}/save/{task_id}', 'RecordController@store')->name('submit');
Route::get('/doctor/{doc_id}/patient/{pa_id}/task/{task_id}/check', 'DoctorController@check')->name('check');