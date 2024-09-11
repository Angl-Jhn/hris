<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', function(){
    return view ('welcome');
});

// Route::get('/', [LoginController::class, 'login'])->name('login');

Auth::routes(); //all routes for authentication views

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard'); //dashboard