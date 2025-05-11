<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use Livewire\Volt\Volt;


Route::get('/products/{id}', function () {
    return view('welcome');
});

Route::get('/products/{id}', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/user/create', [UserController::class, 'create']) ->name('user.create');
Route::post('/user/store', [UserController::class, 'store']) ->name('user.store');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::get('/admin', [AdminController::class, 'showForm'])->name('admin.form');
Route::post('/admin', [AdminController::class, 'storeForm'])->name('admin.store');

Route::get('/home', function () {
    return view('home');
});




