<?php
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::group([
    'namespace' => 'Admin',
    'prefix' => 'admin',
    'middleware' => 'auth'
], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::resource('roles', 'RoleController');
    Route::resource('employees/group', 'EmployeegroupController', ['as' => 'employees']);
    Route::resource('employees', 'UserController');
    Route::namespace('Managers')->group(function () {
        Route::resource('managers/group', 'ManagerGroupController', ['as' => 'managers']);
        Route::resource('managers', 'ManagerController');
    });
    Route::resource('branchs', 'BranchController');
    Route::resource('orders', 'OrderController');
    Route::resource('reports', 'ReportController');
    Route::resource('couriers', 'CourierController');
    Route::resource('categories', 'CategoryController');
    Route::resource('clients/group', 'ClientgroupController', ['as' => 'clients']);
    Route::resource('clients', 'ClientController');
    Route::resource('settings', 'SettingController');
    Route::resource('products', 'ProductController');
});