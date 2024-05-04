<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;
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

//form
Route::get('/form-request',[formController::class,'GetForm'])->name ('Get_Form');
Route::post('/Send-Request',[formController::class, 'SendRequest'])->name('send_Request');

//produk
Route::post('/sign', [ProductController::class, 'store'])->name('sign.store');
Route::get('/produk', [ProductController::class, 'index'])->name('produk.index');

//ADMIN
Route::get('/admin', [ProductController::class, 'admin'])->name('admin');

//create
Route::get('/produk/create', [ProductController::class, 'create'])->name('produk.create');
Route::post('/produk', [ProductController::class, 'store'])->name('produk.store');

//edit
Route::get('/produk/{id}/edit', [ProductController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{id}', [ProductController::class, 'update'])->name('produk.update');

//delete
Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('produk.destroy');

