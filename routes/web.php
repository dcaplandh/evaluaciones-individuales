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

Route::get('/question1', 'questionController@showquestion1');
Route::post('/question1', 'questionController@storequestion1');
Route::get('/question2', 'questionController@showquestion2');
Route::get('/question2/{answer}', 'questionController@storequestion2');

Route::get('/verRespuestas','questionController@answers');
