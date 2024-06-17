<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\TableAdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAdmin;
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
// Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/loginadmin', [AdminController::class, 'loginadmin'])->name('loginadmin');
Route::post('/loginadmin', [AdminController::class, 'postLoginAdmin']);

//User
// Route::get('/admin/users', [UserController::class, 'users'])->name('users.index');
// Route::post('/admin/users', [UserController::class, 'store'])->name('users.store');
// Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('users.update');
// Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::middleware(['auth', CheckAdmin::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin.dashboard');

    //User Admin
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');

    //Table Admin
    Route::get('/admin/tables', [TableAdminController::class, 'index'])->name('admin.tables.index');
    Route::post('/admin/tables', [TableAdminController::class, 'store'])->name('admin.tables.store');
    Route::put('/admin/tables/{id}', [TableAdminController::class, 'update'])->name('admin.tables.update');
    Route::delete('/admin/tables/{id}', [TableAdminController::class, 'destroy'])->name('admin.tables.destroy');
});

//Restaurant
Route::get('/restaurant', [RestaurantController::class, 'restaurant'])->name('restaurant');
Route::get('/tablelist', [RestaurantController::class, 'tablelist'])->name('tablelist');
Route::post('/table/book', [RestaurantController::class, 'bookTable'])->name('table.book');

//Profile
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');

//Contact
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
