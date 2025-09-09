<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Superuser Controller
use App\Http\Controllers\Superuser\SuperuserController;
use App\Http\Controllers\Superuser\Master\AlatberatController;

// Ar Controller
use App\Http\Controllers\Account_Receivable\ArController;

// General Manager Controller
use App\Http\Controllers\General_Manager\GmController;

// Direksi Controller
use App\Http\Controllers\Direksi\DireksiController;

// Pajak Controller
use App\Http\Controllers\Pajak\PajakController;

// Home Controller
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
// Route::middleware('auth')->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });

// ✅ Superuser Route
Route::middleware(['auth', 'role:Superuser'])->group(function () {
    Route::prefix('super_user')->name('super_user.')->group(function () {
        Route::get('/', [SuperuserController::class, 'index'])->name('index');

        // Master Data
        Route::prefix('master')->name('master.')->group(function () {
            Route::get('alat_berat', [AlatberatController::class, 'index'])->name('alat_berat');
        });
    });
});

// ✅ AR Module Route
Route::middleware(['auth', 'role:Account Receivable'])->group(function () {
    Route::prefix('account_receivable')->name('account_receivable.')->group(function () {
        Route::get('/', [ArController::class, 'index'])->name('index');
    });
});

// ✅ General Manager Module Route
Route::middleware(['auth', 'role:General Manager'])->group(function () {
    Route::prefix('general_manager')->name('general_manager.')->group(function () {
        Route::get('/', [GmController::class, 'index'])->name('index');
    });
});

// ✅ Direksi Module Route
Route::middleware(['auth', 'role:Direksi'])->group(function () {
    Route::prefix('direksi')->name('direksi.')->group(function () {
        Route::get('/', [DireksiController::class, 'index'])->name('index');
    });
});

// ✅ Pajak Module Route
Route::middleware(['auth', 'role:Pajak'])->group(function () {
    Route::prefix('pajak')->name('pajak.')->group(function () {
        Route::get('/', [PajakController::class, 'index'])->name('index');
    });
});


