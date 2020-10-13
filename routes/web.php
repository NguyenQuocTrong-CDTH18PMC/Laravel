<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate ;

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

Route::any('/', function () {
    return view('Be.Auth.login');
});
Route::get('/login',"UserController@Login");
Route::post('/login',"UserController@Login_Post");
Route::group(['prefix' => '/Backend','middleware'=>'auth'], function () {

    Route::get('home','BackController@Index');
    Route::group(['prefix' => 'user'], function () {
        Route::get("list","UserController@List");
    });

});

