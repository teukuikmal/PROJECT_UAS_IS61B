<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::controller(MahasiswaController::class)->prefix('mahasiswa')->group(function() {
    Route::get('', 'index')->name('mahasiswa');
    Route::get('insert', 'add')->name('mahasiswa.insert');
    Route::post('insert', 'insert')->name('mahasiswa.add.insert');
    Route::get('{id}/edit', 'edit')->name('mahasiswa.edit');
    Route::put('{id}/edit', 'update')->name('mahasiswa.update');
    Route::delete('{id}', 'destroy')->name('mahasiswa.delete');
});
