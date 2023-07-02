<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shippingController;

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

Route::get('/shipping', [shippingController::class, 'index'])->name('shipping.index');
Route::post('/shipping', [shippingController::class, 'ongkirCheck'])->name('shipping.checkongkir');
Route::get('/cities/{province_id}', [shippingController::class, 'getCities'])->name('cities.index');
