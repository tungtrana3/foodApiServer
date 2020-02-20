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
Route::get('food-type', 'API\foodTypeController@getListFoodType');
Route::get('food', 'API\foodController@getListFood');

//Thêm món mới
Route::post('add-food', 'API\foodController@addNewFood');
//Sửa món ăn
Route::post('update-food', 'API\foodController@updateFood');
