<?php

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

Route::get('/', function () {
    return view('frontend-template.main');
})->name('home');

Route::get('/login', [AuthController::class,'index']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni');
