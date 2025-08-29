<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login' , [AuthController::class , 'LoginPage'])->middleware('LoginCheck');
Route::get('/register' , [AuthController::class , 'RegisterPage'])->middleware('LoginCheck');
Route::post('/register' , [AuthController::class , 'register'])->name('RegisterAccount');
Route::post('login' , [AuthController::class , 'Login'])->name("LoginAccount");

Route::prefix('Admin')->middleware('AdminCheck')->group(function(){
    Route::get('/Dashboard' , function(){
        return view('admin.Home');
    });
    Route::get('/AddProduct' , function(){
        return view('admin.AddProduct');
    });
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/ShowAllProduct' , 'index');
    Route::post('/UploadProduct' , 'store')->name('storeProduxt');
});

Route::get('/UserTest' , function(){
    return view('/UserTest');
})->middleware('auth');

Route::post('/Logout' , [AuthController::class , 'logout']);
