<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturersController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\MarksController;
use App\Models\Student;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Login Routes
Route::get('/', function (\Illuminate\Http\Request $request) {
    if($request->session()->has('is_admin_logged_in')){
        return redirect()->route('admin.dashboard');
    }
    return response()->view('login')->header('Cache-Control', 'no-cache, no-store, must-revalidate')
        ->header('Pragma', 'no-cache')
        ->header('Expires', '0');
})->name('admin.login.form');

Route::post('/admin/login-check', [AdminController::class, 'loginCheck'])->name('admin.login');
Route::get('/admin-logout', [AdminController::class, 'logout'])->name('admin.logout');


// Admin Dashboard
Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

// Student Management Routes 
Route::prefix('students')->group(function () {
    Route::get('/view', [StudentController::class, 'view'])->name('students.view');
    Route::get('/add', [StudentController::class, 'create'])->name('students.addstudents');
    Route::post('/add',[StudentController::class, 'store'])->name('students.store');
    Route::get('/studentdetail/{id}',[StudentController::class,'show'])->name('students.details');
    Route::get('/edit-student/{id}',[StudentController::class,'update'])->name('students.edit');
    Route::post('/update/{id}', [StudentController::class, 'updateStudent'])->name('students.update');
    Route::delete('/delete/{id}',[StudentController::class, 'delete'])->name('students.delete');
});

// Lecturers Management Routes

Route::prefix('lecturers')->group(
    function () {
        Route::get('/addlecturers', [LecturersController::class, 'create'])->name('lecturers.addlecturers');
        Route::get('/viewlecturers', [LecturersController::class, 'view'])->name('lecturers.viewlecturers');
    }
);



//Subjects Management Routes

Route::prefix('subjects')->group(
    function () {
        Route::get('/addsubjects', [SubjectController::class, 'create'])->name('subject.addsubjects');
        Route::get('/viewsubjects', [SubjectController::class, 'view'])->name('subject.viewsubjects');
        Route::post('/store',[SubjectController::class,'store'])->name('subject.store');
    }
);


//Marks Route Management
Route::prefix('marks')->group(
    function(){
        Route::get('/entrymarks',[MarksController::class,'entry_marks'])->name('marks_entry.entrymarks');
        Route::post('/store',[MarksController::class,'store'])->name('marks_entry.store');
        Route::get('/marks-Details/{reg}',[MarksController::class,'view'])->name('marks_entry.view');
    }
);