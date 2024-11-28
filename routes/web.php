<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/detail/{produk}', [UserController::class, 'detail'])->name('pelanggan.detail');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/postlogin', [UserController::class, 'postlogin'])->name('postlogin');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/postregister', [UserController::class, 'postregister'])->name('postregister');


Route::middleware('auth')->group(function () {
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
    Route::post('/postkeranjang/{produk}', [UserController::class, 'postkeranjang'])->name('pelanggan.postkeranjang');
    Route::get('/keranjang', [UserController::class, 'keranjang'])->name('pelanggan.keranjang');
    Route::get('/bayar/{detailtransaksi}', [UserController::class, 'bayar'])->name('pelanggan.bayar');
    Route::post('/prosesbayar/{detailtransaksi}', [UserController::class, 'prosesbayar'])->name('pelanggan.prosesbayar');
    Route::get('/summary', [UserController::class, 'summary'])->name('pelanggan.summary');

    Route::get('admin/produk', [AdminController::class, 'produkIndex'])->name('admin.produk');
    Route::get('admin/tambahproduk', [AdminController::class, 'showtambahproduk'])->name('admin.showtambahproduk');
    Route::post('admin/tambahproduk', [AdminController::class, 'tambahproduk'])->name('admin.tambahproduk');
    Route::get('admin/ubahproduk/{produk}', [AdminController::class, 'ubahproduk'])->name('admin.showubahproduk');
    Route::post('admin/ubahproduk/{produk}', [AdminController::class, 'baruproduk'])->name('admin.ubahproduk');
    Route::get('admin/hapusproduk/{produk}', [AdminController::class, 'hapusproduk'])->name('admin.hapusproduk');
});
