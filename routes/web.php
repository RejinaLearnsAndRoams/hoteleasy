<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


 Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');

Route::get('/room', function () {
    return view('frontend.pages.Rooms');
})->name('room');

Route::get('/about', function () {
    return view('frontend.pages.About ');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.pages.Contact ');
})->name('contact');

Route::get('/register', function () {
    return view('frontend.auth.pages.register');
})->name('register');

Route::get('/facilities', function () {
    return view('frontend.pages.Facilities');
})->name('facilities');


Route::get('/login', [AuthController::class, 'login'])->name('login');



Route::get('/admin',[DashboardController::class, 'home'])->name('admin.dashboard');

Route::get('/register', [AuthController::class, 'register'])->name('register');
