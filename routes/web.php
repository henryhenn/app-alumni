<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\CommunityController;

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

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni');

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('my-profile', MyProfileController::class)->only('index', 'edit', 'update');

    Route::controller(CommunityController::class)->group(function () {
        Route::get('communities', 'index')->name('communities');

        Route::get('communities/create', 'create')->name('communities.create');

        Route::post('communities', 'store')->name('communities.store');

        Route::get('communities/{post:id}/edit', 'edit')->name('communities.edit');

        Route::put('communities/{post:id}', 'update')->name('communities.update');

        Route::get('communities/my-posts', 'usersCommunity')->name('my-communities');
    });
});

Route::group(['middleware' => ['role:Admin|Super Admin']], function () {
    Route::resource('admins', AdminController::class)->except('show');
});
