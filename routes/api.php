<?php


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
Route::get('/checkNewOrder/{count}', 'Front\OrderStatusController@count');
Route::get('/products', 'Front\ProductController@index');
Route::post('/orders', 'Front\OrderController@store');
Route::get('/products/search', 'Front\ProductSearchController@index');
Route::get('/products/{product}', 'Front\ProductController@show');
Route::get('/categories_managers', 'Front\ManagerCategoriesController@index');

Route::resource('/categories', 'Front\CategoryController');
Route::post('/client/register', 'Front\Auth\AuthController@register');
Route::get('/regions', 'Front\RegionController@index');
Route::get('/regions/{region}', 'Front\RegionController@show');
Route::get('/managers', 'Front\ManagerController@index');
// Route::get('/managers/{manager}/products', 'Front\ManagerController@getProducts');
Route::get('/managers/{manager}', 'Front\ManagerController@show');
Route::get('/managers/{manager}/products/cart', 'Front\ManagerController@getCart');
Route::get('/branches/{branch}', 'Front\BranchController@show');
Route::get('locale/{locale}', function ($locale) {
    \Cache::forever('lang', $locale);
    return response(\App::getLocale(), 200);
});
Route::get('/sms/check', 'Front\SMSController@getCheckCode');
Route::post('/sms/create', 'Front\SMSController@create');
Route::post('/client/register', 'Front\Auth\AuthController@register');
Route::group(['middleware' => 'jwt.generate'], function () {
    Route::get('/me', 'Front\Auth\AuthController@user');
    Route::patch('/clients/{client}/settings', 'Front\Auth\AuthController@update');
    Route::post('/proceed/checkout', 'Front\OrderController@store');
    Route::post('/logout', 'Front\Auth\AuthController@logout');
});
