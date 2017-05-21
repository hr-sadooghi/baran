<?php

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
    return view('welcome');
});

Route::get('check-domain/{domain}', 'DomainController@checkDomain');
Route::get('check-domain-batch/{domainList}', 'DomainController@checkDomainBatch');

Route::get('customers', 'CustomersController@index');
// Route::get('customers/{id}', 'CustomersController@show');

Route::get('customers/create', 'CustomersController@create');
Route::post('customers', 'CustomersController@store');

// Route::get('customers/{id}/edit', 'CustomersController@edit');
// Route::patch('customer/{id}', 'CustomersController@update');
// Route::delete('customer/{id}', 'CustomersController@remove');


Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('orders/create', 'OrderController@create')->name('order_create');
Route::post('orders/store', 'OrderController@store')->name('order_store');
Route::get('orders', 'OrderController@index')->name('order_list');


Route::get('e-wallet', 'EWalletController@index');
Route::get('e-wallet/transaction', 'EWalletTransactionController@index');
