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

Route::get('/profile','ProfileController@indexProfile');

Route::post('/profile/viewA','ProfileController@viewProfileByAdmission');
Route::post('/profile/viewF','ProfileController@viewProfileByFirstname');
Route::post('/profile/viewL','ProfileController@viewProfileByLastname');

Route::get('/profile/{admission}','ProfileController@showProfile');
Route::get('/profile/{admission}/edit','ProfileController@editProfile');
Route::put('/profile/{admission}','ProfileController@updateProfile');
