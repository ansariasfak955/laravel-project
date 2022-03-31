<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sellerController;

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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register/save-user', [RegisterController::class,'save_form']);

Route::get('/seller/register',function(){
    return view('registerSeller');
});

Route::get('/seller/dashboard',function(){
    return view('seller.dashboard');
})->middleware('redirectSeller');

Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
});


Route::post('/register/save-seller', [sellerController::class,'saveSeller']);

Route::get('/login',function(){
    return view('login');
});


Route::get('/logout',[LoginController::class,'logout_user']);
Route::post('/login/check_user',[LoginController::class,'check_user']);





