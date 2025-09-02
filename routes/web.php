<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Superuser\SuperuserController;

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

// Route::middleware(["auth"])->group(function () {
//    Route::get('/', function () {
//     return view('home');
//    });
// });

Auth::routes();

Route::middleware(["auth"])->group(function () {
    Route::get('/', [SuperuserController::class, 'index']);
});



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/super_user', [App\Http\Controllers\SuperuserController::class, 'index'])->name('home');