<?php

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Middleware\EnsureUserIsAuthenticated;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

//Authentication routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('login', [LoginController::class, 'authenticate'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('register', [RegisterController::class, 'register'])->name('register');

//Protected routes
Route::middleware([EnsureUserIsAuthenticated::class])->group(function(){
    Route::get('/protected', function () {
        return view('protected');
    })->name('protected');
});
