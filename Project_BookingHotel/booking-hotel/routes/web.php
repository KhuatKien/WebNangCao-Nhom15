<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;


//User
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'postLogin']);
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'postRegister']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//SSO Google
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');

//Admin
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/loginadmin', [AdminController::class, 'loginadmin'])->name('loginadmin');
Route::post('/loginadmin', [AdminController::class, 'postLoginAdmin']);


//Restaurant
Route::get('/restaurant', [RestaurantController::class, 'restaurant'])->name('restaurant');
Route::get('/tablelist', [RestaurantController::class, 'tablelist'])->name('tablelist');
Route::post('/table/book', [RestaurantController::class, 'bookTable'])->name('table.book');

//Profile
// Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
// Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
