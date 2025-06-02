<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\IssuingCardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Auth::routes();
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/luxury-delivery', [PagesController::class, 'luxury_delivery'])->name('luxury_delivery');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/shop', [PagesController::class, 'shop'])->name('shop');
Route::get('/custom-packaging', [PagesController::class, 'custom_packaging'])->name('custom_packaging');
Route::get('/concierge-service', [PagesController::class, 'concierge_service'])->name('concierge_service');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/privacy-policy', [PagesController::class, 'privacy_policy'])->name('privacy-policy');

Route::get('/settings', [PagesController::class, 'settings'])->middleware('auth')->name('settings');
Route::put('/settings', [PagesController::class, 'updateSettings'])->name('settings.update');
Route::post('/settings/password', [PagesController::class, 'updatePassword'])->name('settings.password.update');


Route::post('/issuing-card', [IssuingCardController::class, 'create'])->name('issuing_card');
Route::get('/my-card', [IssuingCardController::class, 'showCardDetails'])->name('my_card');
Route::resource('addresses', AddressController::class);
Route::resource('orders', OrderController::class);

Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'isAdmin'], 'namespace' => '\App\Http\Controllers\Admin'], function () {
    Route::get('/', 'HomeController@index')->name('admin.dashboard');
    Route::resource('users', UserController::class);
    Route::resource('order', AdminOrderController::class);
});
Auth::routes();
