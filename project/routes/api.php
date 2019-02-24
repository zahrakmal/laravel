<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::get('clinics','cliniccontroller@index');
Route::get('clinic/{id}','cliniccontroller@show');
Route::get('clinic','cliniccontroller@store');
Route::get('clinic/{id}','cliniccontroller@update');
Route::get('clinic/{id}','cliniccontroller@delete');*/

Route::resource('clinics','postscontroller');


