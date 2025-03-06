<?php

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\Services\CategoryController;
use App\Http\Controllers\Services\ServiceController;
use App\Http\Middleware\EnsureUserIsAuthenticated;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


//Public routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('services', [ServiceController::class, 'index'])->name('services.index');
Route::get('services/{service}', [ServiceController::class, 'show'])->name('services.show');

Route::resource('categories', CategoryController::class);

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

//Email verification routes
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect()->route('home');
})->middleware(['auth', 'signed'])->name('verification.verify');



//Routes protected by the user authorization middleware
Route::middleware([EnsureUserIsAuthenticated::class])->group(function(){
    Route::get('/protected', function () {
        return view('protected');
    })->name('protected');

    Route::resource('services', ServiceController::class)->except(['index', 'show']);
});
