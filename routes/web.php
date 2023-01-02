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

// Route::get('/', function () {
//     return view('login');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/',[AuthController::class,'home']);
Route::post('/',[AuthController::class,'handleLogin']);

Route::get('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'register']);

Route::get('/category', function () {
    return view('product_category');
});
Route::get('/detail', function () {
    return view('product_detail');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/manage', function () {
    return view('manage_product');
});
Route::get('/addproduct', function () {
    return view('add_product');
});
Route::get('/updateproduct', function () {
    return view('update_product');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/history', function () {
    return view('history');
});
