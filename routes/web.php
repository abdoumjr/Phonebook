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
    return view('phonebook');
});

//get data
Route::get('/getdata','PhonebookController@index');
Route::post('/adddata','PhonebookController@store');
Route::get('showdata/{id}','PhonebookController@show');
Route::put('updatedata','PhonebookController@update');
Route::get('/deletedata/{id}','PhonebookController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
