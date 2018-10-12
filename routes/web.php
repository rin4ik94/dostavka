<?php
    Route::get('/', function () { return view('welcome');});
    Auth::routes();
    
    Route::get('cp','Admin\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('cp','Admin\Admin\LoginController@login');
    Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth:admin'
    ],function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::resource('roles','RoleController');
    Route::resource('employees/group','EmployeegroupController',['as' => 'employees'])->except(['show', 'create']);
    Route::resource('employees','UserController')->except(['create']);
    Route::namespace('Managers')->group(function () {
        Route::resource('managers/group','ManagerGroupController',['as' => 'managers'])->except(['show', 'create', 'edit']);
        Route::resource('managers','ManagerController')->except(['show', 'create', 'edit']);
    });
    Route::resource('branchs','BranchController')->except(['show', 'create']);
    Route::resource('orders','OrderController')->except(['show', 'create', 'edit']);
    Route::resource('reports','ReportController')->except(['show', 'create','edit']);
    Route::resource('couriers','CourierController')->except(['show', 'create', 'edit']);
    Route::resource('categories','CategoryController')->except(['show', 'create']);
    Route::resource('clients/group','ClientgroupController',['as' => 'clients'])->except(['show', 'create', 'edit']);
    Route::resource('clients','ClientController')->except(['show', 'create', 'edit']);
    Route::resource('products','ProductController')->except(['show', 'create', 'edit']);
    Route::get('settings','SettingController@index')->name('settings');
});