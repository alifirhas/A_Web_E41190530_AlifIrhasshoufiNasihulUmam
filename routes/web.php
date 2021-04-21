<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isSuperAdmin;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('landing');
})->name('home');

Route::get('/landing', function () {
    return view('landing.index');
})->name('landing');

Route::get('/register', [RegisterController::class, 'index'])
    ->name('register')
    ->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LogutController::class, 'index'])
    ->name('logout')
    ->middleware('auth');

Route::middleware(['auth', 'is.admin'])->prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('users', [AdminController::class, 'users'])
        ->name('admin.users')
        ->middleware('is.super.admin');

});

Route::get('/profile/{user:username}', [ProfileController::class, 'index'])
    ->name('profile')
    ->middleware('auth');
Route::delete('/profile/{user}', [ProfileController::class, 'destroy'])
    ->name('profile.destroy');

Route::get('/profile/update/{user}', [ProfileController::class, 'profileEdit'])
    ->name('profile.edit')
    ->middleware('auth');
Route::put('/profile', [ProfileController::class, 'put'])
    ->name('profile.put');

Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');
Route::post('/dashboard', [PostController::class, 'store']);
