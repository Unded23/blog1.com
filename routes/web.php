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

Route::name('person.index')->get('/person/all', 'Front.PersonController@index');

Route::namespace('Front')->group(function () {
    Route::name('person.index')->get('/person/all', 'PersonController@index');
    Route::name('person.page')->get('/person/{person}', 'PersonController@show');
});