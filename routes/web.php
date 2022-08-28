<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\BookdetailsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
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
    return redirect('login');
});

Route::view('register','Auth/register')->middleware('guest');
Route::post('store',[RegisterController::class,'store']);
//Route::get('dashboard', function () {return view('dashboard');})->middleware('auth');
Route::get('home',[BookController::class,'getBook']);
Route::get('error',function(){
    return view('error');
});
Route::get('cart',[CartController::class,'getcart']);
Route::view('login','Auth/login')->middleware('guest')->name('login');
Route::post('authentication',[LoginController::class,'auth']);
Route::get('logout',[LoginController::class,'logout']);
Route::post('admin/book',[BookController::class,'book']);
Route::view('admin/login','Admin/Auth/login');
Route::post('admin/adminauth',[AuthController::class,'Auth']);
Route::get('admin/logout',[AuthController::class,'logout']);
Route::get('admin/adminauth',function(){
   return redirect()->back();
});
Route::group(['middleware' => ['admin']], function () {
   Route::view('admin/add','Admin/add_book');
});
Route::post('getbook',[BookdetailsController::class,'getdetails']);
Route::post('payment',[PaymentController::class,'payment']);
Route::get('success',function(){
   return view('Success');
});
Route::get('getbook',function(){
   return back();
});
Route::get('view',[ProfileController::class,'profile']);