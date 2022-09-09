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

Route::get('/', 'PagesController@welcome')->name('welcome');
Route::get('/mision-vision', 'PagesController@mision')->name('mision');
Route::get('/productos-servicios', 'PagesController@products')->name('products');
Route::get('/prensa', 'PagesController@prensa')->name('prensa');
Route::get('/facturacion', 'PagesController@factura')->name('facturacion');
Route::post('/sendInvoice', 'PagesController@invoice')->name('invoice');

Route::post('contact', 'MessagesContoller@store')->name('contact');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::resource('informations', 'DashboardController');
    // Route::resource('users', 'UsersController');
	Route::resource('products', 'ProductController');
    Route::resource('services', 'ServiceController');
    Route::resource('notices', 'NoticeController');
    Route::resource('invoices', 'InvoiceController');
});


// Route::get('/home', 'HomeController@index')->name('home');
