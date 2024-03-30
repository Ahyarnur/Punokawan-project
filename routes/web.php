<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingpageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Interface
Route::get('/interface', [LandingpageController::class, 'interface'])->name('interface');

// Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

// Admin
Route::get('/aktivitasadmin', [AdminController::class, 'aktivitasadmin'])->name('aktivitasadmin');
Route::get('/wargaadmin', [AdminController::class, 'wargaadmin'])->name('wargaadmin');
Route::get('/pengumumanadmin', [AdminController::class, 'pengumumanadmin'])->name('pengumumanadmin');

// User 
Route::get('/aktivitasuser', [UserController::class, 'aktivitasuser'])->name('aktivitasuser');
Route::get('/wargauser', [UserController::class, 'wargauser'])->name('wargauser');
Route::get('/pengumumanuser', [UserController::class, 'pengumumanuser'])->name('pengumumanuser');


