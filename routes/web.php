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
    return view('home');
});

Auth::routes(); //認証系の機能を一括行なってくれる

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/drills/new', 'DrillsController@new')->name('drills.new');
Route::post('/drills', 'DrillsController@create')->name('drills.create');
Route::get('/drills', 'DrillsController@index')->name('drills');
Route::get('/drills/{id}/edit', 'DrillsController@edit')->name('drills.edit');
Route::post('/drills/{id}', 'DrillsController@update')->name('drills.update');
Route::post('/drills/{id}/delete', 'DrillsController@destory')->name('drills.delete');
Route::get('/drills/{id}', 'DrillsController@show')->name('drills.show');

