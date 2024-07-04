<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('/login');
});

Route::get('/register', function () {
    return view('/register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/admin', function () {
    return view('/admin/dashboard');
});

Route::get('/user', function () {
    return view('/admin/dashboard');
});