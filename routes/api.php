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

Route::post('/login', 'AuthenticateController@authenticate');
Route::post('/register', 'AuthenticateController@registration');
//Route::middleware('jwt.auth')->post('/user', 'UserController@index');

Route::group(['middleware' => 'jwt.auth'], function(){
      Route::get('/user', 'UserController@index');
      Route::post('/user', 'UserController@store');
      Route::post('/delete', 'UserController@destroy');
});