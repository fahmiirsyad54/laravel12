<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;

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

Route::get('/dashboard', function () {
    return view('admin.dashboard',[
        'title' => 'Dashboard'
    ]);
});
