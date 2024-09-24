<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardAController;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/', function () {
    return view('home');
})->name('homeUser');

Route::get('/recipe', function () {
    return view('page.recipe');
})->name('recipe');

Route::get('/detail', function () {
    return view('layout.detail');
})->name('detail');

Route::get('/news', function () {
    return view('page.news');
})->name('news');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


// Route untuk menampilkan form pendaftaran
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
// Route untuk menangani pengiriman form pendaftaran
Route::post('/register/account', [AuthController::class, 'register'])->name('registerUser');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


// Route untuk Admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard',[DashboardAController::class, 'index'])->name('admin.dashboard');
    Route::delete('/admin/dashboard/{id}/delete',[DashboardAController::class, 'destroy'])->name('user.delete');
    Route::post('/logout', [DashboardAController::class, 'logout'])->name('logout');
});

// Route untuk User
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('home', function () {
        return view('home');
    })->name('home');
    Route::post('/logout', [DashboardAController::class, 'logout'])->name('logout');
});




