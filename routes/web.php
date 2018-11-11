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

Route::get('/', 'PagesController@index');
Route::get('/usluge', 'PagesController@usluge');
Route::get('/kontakt', 'PagesController@kontakt');
Route::get('/proizvodi', 'PagesController@proizvodi')->name('proizvodi');
Route::get('/o-nama', 'PagesController@about');
Route::get('/polisa-privatnosti', 'PagesController@polisa');
