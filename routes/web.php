<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/profile', function () {
    return view('profile',[
        'title' => 'Profile'
    ]);
});

Route::get('/student', [StudentController::class, 'index']);

