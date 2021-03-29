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
Route::group([ 'prefix' => 'sale-order'], function () {
    Route::get('/', 'SaleOrderController@index')->name('sale-order.index');
    Route::get('/edit', 'SaleOrderController@edit')->name('sale-order.edit');
    Route::get('/detail/{id}', 'SaleOrderController@detail')->name('sale-order.detail');
    Route::get('/return-product', 'SaleOrderController@returnProduct')->name('sale-order.return-product');
    Route::get('/return-product/create', 'SaleOrderController@returnProductCreate')->name('sale-order.return-product-create');
    Route::get('/return-product/edit', 'SaleOrderController@returnProductEdit')->name('sale-order.return-product-edit');
});

// Purchase Order
Route::group([ 'prefix' => 'purchase-order'], function () {
    Route::get('/', 'PurchaseOrderController@index')->name('purchase-order.index');
    Route::get('/create', 'PurchaseOrderController@create')->name('purchase-order.create');
    Route::get('/edit/{id}', 'PurchaseOrderController@edit')->name('purchase-order.edit');
    Route::get('/detail/{id}', 'PurchaseOrderController@detail')->name('purchase-order.detail');
    Route::get('/return-product', 'PurchaseOrderController@returnProduct')->name('purchase-order.return-product');
    Route::get('/return-product/create', 'PurchaseOrderController@returnProductCreate')->name('purchase-order.return-product-create');
    Route::get('/return-product/edit', 'PurchaseOrderController@returnProductEdit')->name('purchase-order.return-product-edit');
});

// Contact
Route::group([ 'prefix' => 'contact'], function () {
    Route::get('/', 'ContactController@index')->name('contact.index');
    Route::get('/detail', 'ContactController@detail')->name('contact.detail');
    Route::get('/edit', 'ContactController@edit')->name('contact.edit');
    Route::get('/agent/list', 'ContactController@agentList')->name('contact.agent-list');
    Route::get('/agent/detail', 'ContactController@agentDetail')->name('contact.agent-detail');
    Route::get('/agent/edit', 'ContactController@agentEdit')->name('contact.agent-edit');
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
    Route::get('/transport', 'SettingController@transport')->name('setting.transport');
    Route::get('/change-password', 'SettingController@changePassword')->name('setting.change-password');
});
