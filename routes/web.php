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

Route::get('top','SilkyController@index');


// メール問い合わせ用ルーティング
Route::get('/contact', 'ContactController@form');
Route::post('/contact/confirm', 'ContactController@confirm');
Route::post('/contact/process', 'ContactController@process');