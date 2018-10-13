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

Route::get('/products', 'Front\ProductController@index');
Route::get('/categories_managers', 'Front\ManagerCategoriesController@index');

Route::resource('/categories', 'Front\CategoryController');
Route::post('/client/register', 'Front\Auth\AuthController@register');
Route::get('/regions', 'Front\RegionController@index');
Route::get('/managers', 'Front\ManagerController@index');
// Route::group(['middleware' => 'jwt.generate'], function () {
//     Route::get('/me', 'Front\Auth\AuthController@user');
//     Route::patch('/clients/{client}/settings', 'Front\Auth\AuthController@update');
//     Route::post('/proceed/checkout', 'Front\OrderController@store');
// });
// Route::post('/logout', 'Front\Auth\AuthController@logout');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
