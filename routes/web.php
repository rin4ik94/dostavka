<?php 
use App\Models\Order;
use App\Models\Product;
 Route::get('info',function(){
     phpinfo();
 });
Route::get('/neworder', function () {
    $order = Order::create(['manager_id' => rand(1, 8), 'client_id' => 1, 'payment_type_id' => rand(1, 4), 'region_id' => 1, 'payment_type_id' => rand(1, 2), 'order_status_id' => 1, 'region_id' => 1, 'delivery_address_street' => 'Чиланзарский район, ул 2', 'order_price' => 25000, 'delivery_price' => 5000, 'total_price' => 30000]);
    $product = Product::find(1);
    $order->products()->attach($product->id, ['product_count' => 5, 'product_name' => $product->name_ru, 'product_price' => $product->new_price, 'product_total_price' => $product->new_price * 5, 'product_measurement' => $product->measurement]);
    $order->statuses()->attach(1, ['client_id' => 1]);
    return redirect('/');
});
Route::get('cp', 'Admin\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('cp', 'Admin\Admin\LoginController@login');
Route::post('logout', 'Admin\Admin\LoginController@logout')->name('admin.logout');
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
    Route::resource('branchs', 'BranchController')->except(['show', 'create']);
    Route::resource('orders', 'OrderController')->except(['show', 'create', 'edit']);
    Route::put('orderstatus/{order}', 'OrderStatusController@update')->name('orderstatus.update');
    Route::put('ordercourier/{order}', 'OrderController@courierChange')->name('ordercourier.update');
    Route::get('reports', 'ReportController@index')->name('reports');
    Route::resource('couriers', 'CourierController')->except(['show', 'create', 'edit']);
    Route::resource('categories', 'CategoryController')->except(['show', 'create']);
    Route::get('categories/get-parents', 'CategoryController@getParentCat')->name('categories.getparents');
    Route::resource('clients', 'ClientController')->except(['show', 'create', 'edit']);
    Route::resource('products', 'ProductController')->except(['show', 'create', 'edit']);
    Route::resource('transactions', 'TransactionController')->except(['show', 'create', 'edit']);
    Route::get('settings', 'SettingController@index')->name('settings');
    Route::patch('/settings/update', 'SettingController@update'); 
    Route::get('settings/orders', 'SettingController@orders')->name('settings.orders');
    Route::get('settings/goto', 'SettingController@goto')->name('settings.goto');
    Route::get('settings/payment', 'SettingController@payment')->name('settings.payment');
    Route::get('settings/regions', 'SettingController@regions')->name('settings.regions');
    Route::post('settings/regions', 'SettingController@storeRegion')->name('settings.region.store');
    Route::delete('settings/regions/{id}', 'SettingController@destroyRegion');
    Route::put('settings/regions/{id}', 'SettingController@updateRegion');
});

Route::get('set-hook', 'Admin\TelegramController@setWebHook');
Route::post(env('TELEGRAM_BOT_TOKEN','757827713:AAE56ntnp5cf-NNGI8vMcsTsC0ycwGGu_h4') . '/webhook', 'Admin\TelegramController@handleRequest');
Route::get('/{any?}', 'Front\HomeController@index')->where('any', '^(?!api).*$');
