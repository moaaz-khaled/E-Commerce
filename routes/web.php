<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login' , [AuthController::class , 'LoginPage'])->middleware('LoginCheck');
Route::get('/register' , [AuthController::class , 'RegisterPage'])->middleware('LoginCheck');
Route::post('/register' , [AuthController::class , 'register'])->name('RegisterAccount');
Route::post('login' , [AuthController::class , 'Login'])->name("LoginAccount");

Route::get('/AdminTest' , function(){
    return view('admin.Home');
})->middleware('AdminCheck');

Route::get('/UserTest' , function(){
    return view('/UserTest');
})->middleware('auth');

Route::post('/Logout' , [AuthController::class , 'logout']);
