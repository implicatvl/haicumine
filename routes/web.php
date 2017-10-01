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
    return view('bunvenit');
});


Route::get('/o9cursa', 'CurseController@o9Cursa_get')->name('o9cursa');
Route::post('/o9cursa', 'CurseController@o9Cursa_post');