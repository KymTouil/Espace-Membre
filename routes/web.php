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

Route::get('profile','UserController@profile');
//affichage du profil



Route::post('profile','UserController@update_avatar');
//creation du profil

Route::post('profile','UserController@update_slide_1');

Route::post('profile','UserController@update_slide_2');

Route::post('profile','UserController@update_slide_3');