<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\OrderController;
use App\Models\Order;

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

// user home
Route::get('/', [HomeController::class, 'userIndex'])->name('user.home');

// admin home
Route::get('/admin/dashboard', [HomeController::class, 'adminIndex'])->name('admin.dashboard');

// orders

Route::get('/admin/orders')->name('admin.orders');
Route::POST('/admin/order/delete/{id}', [OrderController::class, 'delete'])->name('admin.order.delete');

Route::get('admin/orders', [OrderController::class, 'index'])->name('admin.orders');

// offers

Route::resource('admin/offers', OfferController::class);

Route::get('/admin/offers', [OfferController::class, 'index'])->name('admin.offers');

Route::get('admin/offers/create', [OfferController::class, 'create'])->name('offers.create');

Route::POST('/admin/offers/store', [OfferController::class, 'store'])->name('offers.store');

Route::POST('/admin/offer/delete/{id}', [OfferController::class, 'delete'])->name('offers.destroy');
