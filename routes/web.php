<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', function(){
    return view ('welcome');
});

// Route::get('/', [LoginController::class, 'login'])->name('login');

Auth::routes(); //all routes for authentication views

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); //dashboard