<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturersController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;
use App\Models\Student;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Login Routes
Route::get('/', function () {
    return view('login'); // login form
})->name('admin.login.form');

Route::post('/admin/login-check', [AdminController::class, 'loginCheck'])->name('admin.login');

// Admin Dashboard
Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

// Student Management Routes 
Route::prefix('students')->group(function () {
    Route::get('/create', [StudentController::class, 'create'])->name('students.addstudents');
    Route::get('/view', [StudentController::class, 'view'])->name('students.view');
    Route::post('/add',[StudentController::class, 'store'])->name('students.store');
});

// Lecturers Management Routes

Route::prefix('lecturers')->group(
    function () {
        Route::get('/addlecturers', [LecturersController::class, 'create'])->name('lecturers.addlecturers');
        Route::get('/viewlecturers', [LecturersController::class, 'view'])->name('lecturers.viewlecturers');
    }
);

// Class Management Routes

Route::prefix('classes')->group(
    function () {
        Route::get('/addclass', [ClassController::class, 'create'])->name('class.addclass');
        Route::get('/viewclass', [ClassController::class, 'view'])->name('class.viewclass');
    }
);

//Subjects Management Routes

Route::prefix('subjects')->group(
    function () {
        Route::get('/addsubjects', [SubjectController::class, 'create'])->name('subject.addsubjects');
        Route::get('/viewsubjects', [SubjectController::class, 'view'])->name('subject.viewsubjects');
    }
);
