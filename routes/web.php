<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home',[
        'title' => 'Home'
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        'title' => 'Profile'
    ]);
});

Route::get('/student', function () {
    return view('student',[
        'title' => 'Students',
        'students' => [
            [
            'name' => 'Nabil Assidqi',
            'grade' => '11 PPLG 1',
            'email' => 'nabil@mail.com',
            'address' => 'Jl. jalan aja'
        ],
        [
            'name' => 'Rendi',
            'grade' => '11 PPLG 1',
            'email' => 'nabil@mail.com',
            'address' => 'Jl. jalan aja'
        ],
        [
            'name' => 'Ananta',
            'grade' => '11 PPLG 1',
            'email' => 'nabil@mail.com',
            'address' => 'Jl. jalan aja'
        ]
        ]
    ]);
});

