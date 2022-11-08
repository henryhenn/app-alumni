<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlumniController;

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

Route::get('/', HomeController::class)->name('home');

Route::group([
    'prefix' => 'auth',
    'controller' => AuthController::class,
    'middleware' => 'guest',
], function () {
    Route::get('/login', 'index')->name('login');

    Route::post('/login', 'authenticate')->name('login');

    Route::get('/register', 'register')->name('register');

    Route::post('/register', 'store')->name('register');
});

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni');

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('my-profile', MyProfileController::class)->only('index', 'edit', 'update');

    Route::view('community', 'community.index');

Route::group(['middleware' => ['role:Admin|Super Admin']], function () {
    Route::resource('admins', AdminController::class)->except('show');
});
