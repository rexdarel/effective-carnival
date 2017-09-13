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

//Logged in users/seller cannot access or send requests these pages
Route::group(['middleware' => 'alumnus_guest'], function() {

Route::get('/', 'AlumnusAuth\LoginController@showLoginForm');
Route::get('register', 'AlumnusAuth\RegisterController@showRegistrationForm');
Route::post('alumnus_register', 'AlumnusAuth\RegisterController@register');
Route::get('login', 'AlumnusAuth\LoginController@showLoginForm');
Route::post('alumnus_login', 'AlumnusAuth\LoginController@login');

});

//Only logged in sellers can access or send requests to these pages
Route::group(['middleware' => 'alumnus_auth'], function(){

Route::get('/dashboard', function(){
  return view('dashboard');
});

Route::post('alumnus_logout', 'AlumnusAuth\LoginController@logout');
});

