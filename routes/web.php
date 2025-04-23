<?php

use App\Http\Controllers\SendMailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/product', [PagesController::class, 'product'])->name('product');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/terms-condition', [PagesController::class, 'termsCondition'])->name('terms-condition');
Route::get('/privacy-policy', [PagesController::class, 'privacyPolicy'])->name('privacy-policy');

Route::post('/send-mail', [SendMailController::class, 'sendMail'])->name('send.mail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
