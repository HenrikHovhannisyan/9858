<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/luxury-delivery', [PagesController::class, 'luxury_delivery'])->name('luxury_delivery');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/shop', [PagesController::class, 'shop'])->name('shop');
Route::get('/custom-packaging', [PagesController::class, 'custom_packaging'])->name('custom_packaging');
Route::get('/concierge-service', [PagesController::class, 'concierge_service'])->name('concierge_service');


Auth::routes();
