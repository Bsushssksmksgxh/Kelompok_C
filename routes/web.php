<?php

use App\Http\Controllers\layoutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [layoutController::class, 'index'])->name('Home');
Route::get('/shop', [layoutController::class, 'shop'])->name('Shop');
Route::get('/transaksi', [layoutController::class, 'transaksi'])->name('Transaksi');
Route::get('/contact', [layoutController::class, 'contact'])->name('Contact');
Route::get('/checkout', [layoutController::class, 'checkout'])->name('checkout');