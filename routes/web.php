<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::get('register', [LoginController::class, 'register'])->name('register');

Route::post('login', [LoginController::class, 'postLogin'])->name('login.post');
Route::post('register', [LoginController::class, 'postRegister'])->name('register.post');

Route::get('login/forgot', [LoginController::class, 'showForgot'])->name('custom.forgot.form');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboad.index');
Route::get('/admin/add', [AdminController::class, 'showFormAddBook'])->name('admin.book.add');
Route::get('/admin/edit', [AdminController::class, 'showFormEditBook'])->name('admin.book.edit');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/googleLogin', [LoginController::class, 'googleLogin']);
Route::get('/auth/google/callback', [LoginController::class, 'googleHandle']);

// Route::prefix('admin')->group(function () {
//     Route::get('/dashboad', 'AdminController@index')->name('admin.dashboad');
// });


