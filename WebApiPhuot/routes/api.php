<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource("DiaDiem","ApiDiaDiemController");



Route::apiResource("NhomPhuot","ApiNhomPhuotController");

//Hàm lấy hình ảnh
Route::group(['prefix' => 'NhomPhuot'], function () {
    Route::get('uploads/{imageUrl}', 'FileController@getImage');
});


Route::apiResource("User","ApiUserController");
Route::apiResource("ThanhVienNhom","ApiThanhVienNhomController");
Route::apiResource("NhomPhuot","ApiNhomPhuotController");
Route::apiResource("LoTrinh","ApiLoTrinhController");

