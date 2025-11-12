<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AdminStudentController;
use App\Http\Controllers\admin\AdminClassroomController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/profile', function () {
    return view('profile',[
        'title' => 'Profile'
    ]);
});

Route::resource('student', StudentController::class);

Route::get('/classroom', [ClassroomController::class, 'index']);

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/admin/student', [AdminStudentController::class, 'index'])->name('students.index');
Route::post('admin/student', [AdminStudentController::class, 'store'])->name('students.store');
Route::delete('admin/students/{student}', [AdminStudentController::class, 'destroy'])->name('students.destroy');


Route::get('/admin/classroom', [AdminClassroomController::class, 'index']);
Route::post('admin/classroom', [AdminClassroomController::class, 'store'])->name('classrooms.store');
