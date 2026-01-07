<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AdminStudentController;
use App\Http\Controllers\admin\AdminClassroomController;
use App\Http\Controllers\auth\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/profile', function () {
    return view('profile',[
        'title' => 'Profile'
    ]);
});

Route::resource('student', StudentController::class);

Route::get('/classroom', [ClassroomController::class, 'index']);

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {

        // DASHBOARD
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('admin.dashboard');

        // STUDENT
        Route::get('/student', [AdminStudentController::class, 'index'])
            ->name('admin.students.index');

        Route::post('/student', [AdminStudentController::class, 'store'])
            ->name('admin.students.store');

        Route::delete('/students/{student}', [AdminStudentController::class, 'destroy'])
            ->name('admin.students.destroy');

        // CLASSROOM
        Route::get('/classroom', [AdminClassroomController::class, 'index'])
            ->name('admin.classrooms.index');

        Route::post('/classroom', [AdminClassroomController::class, 'store'])
            ->name('admin.classrooms.store');
    });
