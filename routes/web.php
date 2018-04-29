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
  return view('contact');
});

Route::post('/confirmcontact', 'ContactController@confirm');

Route::get('/showcontact', function(){
  return view('contactConfirm');
});

Route::get('/showcontactdetails', 'ContactController@show');
