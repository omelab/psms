<?php

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

//users routes
Auth::routes();

Route::get('/dashboard',function(){ 
    Route::get('/', [HomeController::class, 'index'])->name('home');
})->middleware('auth');



//admin routes
Route::get('/sign-in',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view'); 
Route::post('/sign-in',[LoginController::class,'adminLogin'])->name('admin.login'); 

Route::get('/sign-up',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/sign-up',[RegisterController::class,'createAdmin'])->name('admin.register');