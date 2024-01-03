<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;


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

Route::middleware('auth')->group(function () {
    Route::get('/mahasiswa', [mahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa/create', [mahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::post('/mahasiswa/store', [mahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::get('/mahasiswa/{id}/edit', [mahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::put('/mahasiswa/update/{id}', [mahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::delete('/mahasiswa/delete/{id}', [mahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');



});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

