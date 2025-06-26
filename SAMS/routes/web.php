<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/admin', function () {
    return view('login'); // resources/views/login.blade.php
})->name('admin.login.form');

Route::post('/admin/login-check', [AdminController::class, 'loginCheck'])->name('admin.login');


Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
