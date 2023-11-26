<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForgotController;

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

Route::post('/logout', [LoginController::class, 'logout'])->name('custom.logout');


// Trong routes/web.php

Route::get('/login/facebook', [LoginController::class, 'redirectToFacebook'])->name('custom.facebook');
Route::get('/login/facebook/callback', [LoginController::class, 'handleFacebookCallback'])->name('custom.facebook.callback');

Route::group(['middleware' => 'web'], function () {
    // Routes liên quan đến đăng nhập Google
    Route::get('/login/google',  [LoginController::class, 'redirectToGoogle'])->name('custom.google');
    Route::get('/login/google/callback', [LoginController::class, 'handleGoogleCallback'])->name('custom.google.callback');
});

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('custom.register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('custom.register');


Route::get('/forgot', [ForgotController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot', [ForgotController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}/{email}', [ForgotController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ForgotController::class, 'reset'])->name('password.update');

Route::middleware(['admin'])->group(function () {
    Route::get('/stories', function () {
        return view('Admin.dashboard');
    })->name('admin.dashboard');
});

// Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboad.index');

// Route::get('/admin/add', [AdminController::class, 'showFormAddBook'])->name('admin.book.add');
// Route::post('/admin/add', [AdminController::class, 'storeBook'])->name('admin.book.addStore');
// Route::post('/admin/delete', [AdminController::class, 'deleteBook'])->name('admin.book.delete');

// Route::get('/admin/edit', [AdminController::class, 'showFormEditBook'])->name('admin.book.edit');

Route::resource('/stories',StoryController::class);

Route::resource('/category',CategoryController::class);
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::resource('/user',UserController::class);

Route::get('/stories/search', [StoryController::class, 'search'])->name('stories.search');
// Trong routes/web.php




