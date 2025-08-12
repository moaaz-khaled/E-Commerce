<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login' , [AuthController::class , 'LoginPage']);
Route::get('/register' , [AuthController::class , 'RegisterPage']);
Route::post('/register' , [AuthController::class , 'register'])->name('RegisterAccount');
Route::post('login' , [AuthController::class , 'Login'])->name("LoginAccount");

Route::get('/Test' , function(){
    return view('Test');
})->middleware('auth');

Route::post('/Logout' , [AuthController::class , 'logout']);
