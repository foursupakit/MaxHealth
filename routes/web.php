<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

// Sale Order
Route::group([ 'prefix' => 'report'], function () {
    Route::get('/', 'ReportController@index')->name('report.index');
    Route::get('/main', 'ReportController@main')->name('report.main');
    Route::get('/sell', 'ReportController@sell')->name('report.sell');
    Route::get('/buy', 'ReportController@buy')->name('report.buy');
    Route::get('/product', 'ReportController@product')->name('report.product');
    Route::get('/contact', 'ReportController@contact')->name('report.contact');
});

// Sale Order
Route::group([ 'prefix' => 'sale-order'], function () {
    Route::get('/', 'SaleOrderController@index')->name('sale-order.index');
    Route::get('/edit', 'SaleOrderController@edit')->name('sale-order.edit');
    Route::get('/detail/{id}', 'SaleOrderController@detail')->name('sale-order.detail');
    Route::get('/return-product/list', 'SaleOrderController@returnProduct')->name('sale-order.return-product');
    Route::get('/return-product/create', 'SaleOrderController@returnProductCreate')->name('sale-order.return-product-create');
    Route::get('/return-product/edit', 'SaleOrderController@returnProductEdit')->name('sale-order.return-product-edit');
    Route::get('/return-product/detail/{id}', 'SaleOrderController@returnProductDetail')->name('sale-order.return-product-detail');
});

// Purchase Order
Route::group([ 'prefix' => 'purchase-order'], function () {
    Route::get('/', 'PurchaseOrderController@index')->name('purchase-order.index');
    Route::get('/create', 'PurchaseOrderController@create')->name('purchase-order.create');
    Route::get('/edit/{id}', 'PurchaseOrderController@edit')->name('purchase-order.edit');
    Route::get('/detail/{id}', 'PurchaseOrderController@detail')->name('purchase-order.detail');
    Route::get('/return-product/list', 'PurchaseOrderController@returnProduct')->name('purchase-order.return-product');
    Route::get('/return-product/create', 'PurchaseOrderController@returnProductCreate')->name('purchase-order.return-product-create');
    Route::get('/return-product/edit', 'PurchaseOrderController@returnProductEdit')->name('purchase-order.return-product-edit');
    Route::get('/return-product/detail/{id}', 'PurchaseOrderController@returnProductDetail')->name('purchase-order.return-product-detail');
});

// Contact
Route::group([ 'prefix' => 'contact'], function () {
    Route::get('/', 'ContactController@index')->name('contact.index');
    Route::get('/detail', 'ContactController@detail')->name('contact.detail');
    Route::get('/edit', 'ContactController@edit')->name('contact.edit');
    Route::get('/agent/list', 'ContactController@agentList')->name('contact.agent-list');
    Route::get('/agent/detail', 'ContactController@agentDetail')->name('contact.agent-detail');
    Route::get('/agent/edit', 'ContactController@agentEdit')->name('contact.agent-edit');
    Route::get('/agent/approve-withdrawal', 'ContactController@agentApproveWithdrawal')->name('contact.agent-approve-withdrawal');
});

// Product
Route::group([ 'prefix' => 'product'], function () {
    Route::get('/', 'ProductController@index')->name('product.index');
    Route::get('/category', 'ProductController@category')->name('product.category');
    Route::get('/warehouse', 'ProductController@warehouse')->name('product.warehouse');
    Route::get('/warehouse/{id}', 'ProductController@warehouseDetail')->name('product.warehouse-detail');
    Route::get('/warehouse/edit/{id}', 'ProductController@warehouseEdit')->name('product.warehouse-edit');
    Route::get('/create', 'ProductController@create')->name('product.create');
    Route::get('/edit', 'ProductController@edit')->name('product.edit');
});

// Setting
Route::group([ 'prefix' => 'setting'], function () {
    Route::get('/', 'SettingController@index')->name('setting.index');
    Route::get('/company', 'SettingController@index')->name('setting.company');
    Route::get('/profile', 'SettingController@profile')->name('setting.profile');
    Route::get('/transport', 'SettingController@transport')->name('setting.transport');
    Route::get('/change-password', 'SettingController@changePassword')->name('setting.change-password');
    Route::get('/user/list', 'SettingController@userList')->name('setting.user-list');
    Route::get('/user/detail', 'SettingController@userDetail')->name('setting.user-detail');
    Route::get('/role/list', 'SettingController@roleList')->name('setting.role-list');
    Route::get('/role/create', 'SettingController@roleCreate')->name('setting.role-create');
    Route::get('/role/edit/{id}', 'SettingController@roleEdit')->name('setting.role-edit');
    Route::get('/general', 'SettingController@general')->name('setting.general');
});
