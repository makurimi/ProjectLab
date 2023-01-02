<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
//home
Route::get('/', [ProductController::class, 'index']);

//auth
//login
Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

//register
Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

//product by category
Route::get('/category/{id}', [ProductController::class, 'categoryProduct']);

//product detail
Route::get('/product/{id}', [ProductController::class, 'productDetail']);
Route::post('/product/{id}', [ProductController::class, 'addToCart'])->middleware('auth');

//search
Route::post('/search', [ProductController::class, 'search'])->name('search');
Route::get('/search', [ProductController::class, 'searchPage']);

//admin only
Route::middleware('auth.admin')->group(function () {
    Route::get('/showproduct', [AdminController::class, 'showProduct'])->name('manageProduct');
    Route::get('/addproduct', [AdminController::class, 'addProductPage']);
    Route::post('/addproduct', [AdminController::class, 'addProduct']);
    Route::get('/deleteproduct/{id}', [AdminController::class, 'delete']);
    Route::get('/update/{id}', [AdminController::class, 'updatePage']);
    Route::post('/update/{id}', [AdminController::class, 'update']);
    Route::post('/manage/search', [AdminController::class, 'search'])->name('searchManage');
    Route::get('/manage/search', [AdminController::class, 'searchPage']);
});


//customer (member) only
Route::middleware('auth.member')->group(function () {
    Route::get('/history', [CartController::class, 'history']);
    Route::get('/showcart', [CartController::class, 'showcart']);
    Route::get('/deletecart/{id}', [CartController::class, 'delete']);
    Route::post('/purchase', [CartController::class, 'purchase'])->name('purchase');
    Route::post('/product/{id}', [ProductController::class, 'addToCart']);
});

//for authenticated user (member & admin)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [AuthController::class, 'profilePage']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
