<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/form-request/user1', [formController::class, 'GetForm'])->name('Get_Form');
Route::post('/Send-Request', [formController::class, 'SendRequest'])->name('send_Request');
Route::post('/sign', [ProductController::class, 'store'])->name('sign.store');
Route::get('/produk', [ProductController::class, 'index'])->name('produk.index');
Route::get('/user/list-produk/user1', [ProductController::class, 'getUser1'])->name('user-1');
Route::get('/user/list-produk/user2', [ProductController::class, 'getUser2'])->name('user-2');
Route::get('/produk/create/user1', [ProductController::class, 'createUser1'])->name('produk.create1');
Route::get('/produk/create/user2', [ProductController::class, 'createUser2'])->name('produk.create2');
Route::post('/produk', [ProductController::class, 'store'])->name('produk.store');
Route::get('/produk/{id}/edit', [ProductController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{id}', [ProductController::class, 'update'])->name('produk.update');
Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('produk.destroy');
Route::get('/profile/user1', [ProfileController::class, 'showUserProfile'])->name('profile.show');
Route::get('/profile/user2', [ProfileController::class, 'showUser2Profile'])->name('profile.show2');

