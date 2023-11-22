<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('custom.login.form');
Route::post('/login', [LoginController::class, 'login'])->name('custom.login');
Route::get('/login/forgot', [LoginController::class, 'showForgot'])->name('custom.forgot.form');
Route::get('/register', [LoginController::class, 'showRegisterForm'])->name('custom.register.form');


// Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboad.index');

// Route::get('/admin/add', [AdminController::class, 'showFormAddBook'])->name('admin.book.add');
// Route::post('/admin/add', [AdminController::class, 'storeBook'])->name('admin.book.addStore');
// Route::post('/admin/delete', [AdminController::class, 'deleteBook'])->name('admin.book.delete');

// Route::get('/admin/edit', [AdminController::class, 'showFormEditBook'])->name('admin.book.edit');

Route::resource('/stories',StoryController::class);

Route::resource('/category',CategoryController::class);

