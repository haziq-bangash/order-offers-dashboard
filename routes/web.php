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
Route::get('/home', [HomeController::class, 'userIndex'])->name('user.home');

// admin home
Route::get('/admin/dashboard', [HomeController::class, 'adminIndex'])->name('admin.dashboard');

Route::get('/admin/offers', [OfferController::class, 'index'])->name('admin.offers');

Route::get('/admin/orders')->name('admin.orders');
Route::POST('/admin/order/delete/{id}', [OrderController::class, 'delete'])->name('admin.order.delete');

Route::get('/admin/add/offer', [OfferController::class, 'addOffer'])->name('admin.add.offer');

Route::get('admin/orders', [OrderController::class, 'index'])->name('admin.orders');

// delete offer from db
Route::POST('/admin/offer/delete/{id}', [OfferController::class, 'delete'])->name('admin.offer.delete');

// add offer to database
Route::POST('/admin/offer/add')->name('admin.add');
