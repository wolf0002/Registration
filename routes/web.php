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
//route to view 
Route::get('/registration', function(){
return view('pages.registration');
});

Route::post('/registration', 'RegistrationController@index');

Route::post('/store', 'RegistrationController@store');

Route::get('/index', 'RegistrationController@index');

Route::get('/adminlogin', function(){
    return view('pages.adminlogin');
});


Auth::routes();
