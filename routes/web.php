<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', [HomeController::class,'dash']);
// Route::view('/', 'v_history');

// Route::view('/history','v_history');
Route::view('/login','v_login');
Route::view('/register','v_register');
// Route::get('/', [HomeController::class,'index']);
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
Route::get('/history', [HomeController::class, 'history'])->name('history');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/crud', [HomeController::class, 'crud'])->name('crud');
Route::post('/dashboard/addfile', [HomeController::class, 'addfile']);
// Route::post('/crud/addfile', [HomeController::class, 'addfile']);
Route::get('file-upload', [FileUploadController::class, 'index']);



