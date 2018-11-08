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

Route::prefix('ballots')->group(function() {
    Route::get('/', 'BallotController@index')->name('ballots.index');
    Route::get('create', 'BallotController@create')->name('ballots.create');
    Route::post('store', 'BallotController@store')->name('ballots.store');
    Route::get('{ballot}/edit', 'BallotController@edit')->name('ballots.edit');
    Route::patch('{ballot}/update', 'BallotController@update')->name('ballots.update');
});
