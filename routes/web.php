<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Superuser\SuperuserController;
use App\Http\Controllers\HomeController;

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

// ✅ route bawaan Laravel untuk login, register, logout, dll
Auth::routes();

// ✅ Default root -> redirect ke halaman login
Route::get('/', function () {
    return redirect()->route('login');
});

// ✅ Route untuk user biasa (setelah login)
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// ✅ Superuser Route
Route::middleware(['auth', 'role:Superuser'])->group(function () {
    Route::prefix('super_user')->name('super_user.')->group(function () {
        Route::get('/', [SuperuserController::class, 'index'])->name('index');

        // Master Data
        Route::prefix('master')->name('master.')->group(function () {
            Route::get('alat_berat', [SuperuserController::class, 'alat_berat'])->name('alat_berat');
        });
    });
});

// ✅ AR Module Route
Route::middleware(['auth'])->group(function () {
    Route::prefix('ar')->name('ar.')->group(function () {
        Route::get('/', [App\Http\Controllers\Account_Receivable\ArController::class, 'index'])->name('index');
    });
});

// ✅ Pajak Module Route
Route::middleware(['auth'])->group(function () {
    Route::prefix('pajak')->name('pajak.')->group(function () {
        Route::get('/', [App\Http\Controllers\Pajak\PajakController::class, 'index'])->name('index');
    });
});

// ✅ Direksi Module Route
Route::middleware(['auth'])->group(function () {
    Route::prefix('direksi')->name('direksi.')->group(function () {
        Route::get('/', [App\Http\Controllers\Direksi\DireksiController::class, 'index'])->name('index');
    });
});

// ✅ General Manager Module Route
Route::middleware(['auth'])->group(function () {
    Route::prefix('general_manager')->name('general_manager.')->group(function () {
        Route::get('/', [App\Http\Controllers\General_Manager\GmController::class, 'index'])->name('index');
    });
});
