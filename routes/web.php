<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatamahasiswaController;

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

Route::middleware(['preventBackHistory'])->group(function () {

Route::get('/datamahasiswauser', [DatamahasiswaController::class,'indexuser'])->name('datamahasiswauser');

Route::get('/datamahasiswaadmin', [DatamahasiswaController::class,'index'])->name('datamahasiswaadmin')->middleware('auth');

Route::get('/tambahmahasiswa', [DatamahasiswaController::class,'tambahmahasiswa'])->name('tambahmahasiswa')->middleware('auth');

Route::post('/insertdata', [DatamahasiswaController::class,'insertdata'])->name('insertdata')->middleware('auth');

Route::get('/tampilkandata/{nim}', [DatamahasiswaController::class,'tampilkandata'])->name('tampilkandata')->middleware('auth');

Route::post('/updatedata/{nim}', [DatamahasiswaController::class,'updatedata'])->name('updatedata')->middleware('auth');

Route::get('/delete/{nim}', [DatamahasiswaController::class,'delete'])->name('delete')->middleware('auth');

Route::get('/login', [LoginController::class,'login'])->name('login');

Route::post('/loginuser', [LoginController::class,'loginuser'])->name('loginuser');

Route::get('/register', [LoginController::class,'register'])->name('register');

Route::post('/registeruser', [LoginController::class,'registeruser'])->name('registeruser');

Route::get('/logout', [LoginController::class,'logout'])->name('logout');

});//end prevent back Middleware
