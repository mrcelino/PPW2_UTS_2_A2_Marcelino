<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\ProductController;
Route::get('/index', [ProductController::class, 'index'])->name('products.index');


Route::post('/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/create', [ProductController::class, 'create'])->name('products.create');

Route::post('/', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('/', [ProductController::class, 'show'])->name('products.show');