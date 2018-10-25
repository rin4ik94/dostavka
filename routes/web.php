<?php 
use App\Models\Order;
use App\Models\Product;
 
Route::get('/neworder', function () {
    $order = Order::create(['manager_id' => rand(1, 8), 'client_id' => 1, 'payment_type_id' => rand(1, 4), 'region_id' => 1, 'payment_type_id' => rand(1, 2), 'order_status_id' => 1, 'region_id' => 1, 'delivery_address_street' => '
        Чиланзарский район, ул 2', 'order_price' => 25000, 'delivery_price' => 5000, 'total_price' => 30000]);
    $product = Product::find(1);
    $order->products()->attach($product->id, ['product_count' => 5, 'product_name' => $product->name_ru, 'product_price' => $product->new_price, 'product_total_price' => $product->new_price * 5, 'product_measurement' => $product->measurement]);
    $order->statuses()->attach(1, ['client_id' => 1]);
    return redirect('/');
});
Route::get('cp', 'Admin\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('cp', 'Admin\Admin\LoginController@login');
Route::post('logout', 'Admin\Admin\LoginController@logout')->name('logout');
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth:admin'
], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('roles', 'RoleController');
    Route::resource('employees/group', 'EmployeegroupController', ['as' => 'employees'])->except(['show', 'create']);
    Route::resource('employees', 'UserController')->except(['create']);
    Route::namespace('Managers')->group(function () {
        Route::resource('managers/group', 'ManagerGroupController', ['as' => 'managers'])->except(['show', 'create', 'edit']);
        Route::resource('managers', 'ManagerController')->except(['show', 'create', 'edit']);
    });
    Route::post('managers/delete', 'Managers\ManagerController@delete');
    Route::resource('branchs', 'BranchController')->except(['show', 'create']);
    Route::resource('orders', 'OrderController')->except(['show', 'create', 'edit']);
    Route::put('orderstatus/{order}', 'OrderStatusController@update')->name('orderstatus.update');
    Route::resource('reports', 'ReportController')->except(['show', 'create', 'edit']);
    Route::resource('couriers', 'CourierController')->except(['show', 'create', 'edit']);
    Route::resource('categories', 'CategoryController')->except(['show', 'create']);
    Route::resource('clients', 'ClientController')->except(['show', 'create', 'edit']);
    Route::resource('products', 'ProductController')->except(['show', 'create', 'edit']);
    Route::get('settings', 'SettingController@index')->name('settings');
    Route::get('settings/orders', 'SettingController@orders')->name('settings.orders');
    Route::get('settings/goto', 'SettingController@goto')->name('settings.goto');
    Route::get('settings/payment', 'SettingController@payment')->name('settings.payment');
});
Route::get('/{any?}', 'Front\HomeController@index')->where('any', '^(?!api).*$');
