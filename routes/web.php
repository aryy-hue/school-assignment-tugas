<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\simpanSiswa;

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

// Route::get('/', function () {
//     return view('pages.dashboard');
// });
// Route::get('/form', function () {
//     return view('pages.form');
// })->name('form');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [SiswaController::class, 'index']);
    Route::get('/form', [SiswaController::class, 'form']);
    Route::post('/simpanSiswa', [SiswaController::class, 'simpanSiswa']);

    Route::get('/dashboard', [SiswaController::class, 'index']);
    Route::get('/form', [SiswaController::class, 'form']);
    Route::post('/simpanSiswa', [SiswaController::class, 'simpanSiswa']);
});

// Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegisterForm']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
