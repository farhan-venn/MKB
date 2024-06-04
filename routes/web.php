<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [MemberController::class, 'index'])->name('home');
Route::get('/cart', [MemberController::class, 'cart'])->name('cart');
Route::get('/checkout', [MemberController::class, 'checkout'])->name('checkout');
Route::get('/detail', [MemberController::class, 'detail'])->name('detail');
Route::get('/product', [MemberController::class, 'product'])->name('product');

Route::get('/penjual', [PageController::class, 'penjual'])->name('penjual');
Route::get('/penjualan', [PageController::class, 'penjualan'])->name('penjualan');
Route::get('/pesanan', [PageController::class, 'pesanan'])->name('pesanan');
Route::get('/pesanan2', [PageController::class, 'pesanan2'])->name('pesanan2');
Route::get('/produk', [PageController::class, 'produk'])->name('produk');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/riwayat', [PageController::class, 'riwayat'])->name('riwayat');
Route::get('/home', [PageController::class, 'home'])->name('home');

Route::get('/auth/login', [LoginController::class, 'index'])->name('login');
Route::get('/auth/register', [RegisterController::class, 'index'])->name('register');
