<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    // your routes here
});

Route::get('/', function () {
    $products = Product::all();
    return view('main', compact('products'));
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/Review', function () {
    return view('layouts.Review');
});

Route::get('/', [productController::class,'index']);
Route::post('/login', [AuthController::class,'login'])->name('login.admin');

Route::get('/admin', [productController::class,'admin'])->name('admin');
Route::get('/', [productController::class,'home'])->name('home');

Route::post('/admin', [ProductController::class, 'store'])->name('products.store');
Route::post('/', [ReviewController::class, 'spawnOpen']);

Route::post('/', [ProductController::class, 'spawn']);
Route::post('/', [ProductController::class, 'spawnOpen']);

Route::get('/delete/{id}', [productController::class, 'delete']);
Route::get('/deleteR/{id}', [productController::class, 'deleteR']);

Route::post('/', [ReviewController::class,'review'])->name('Review.User');
// Route::post('/Review', [ReviewController::class,'review'])->name('Review.User');

// Route::post('/tes', [ReviewController::class,'sendReview']);

// Route for rating
// Route::post('/main', [AuthController::class,'Review'])->name('postReview');

require __DIR__.'/auth.php';
