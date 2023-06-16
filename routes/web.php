<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AgendamentosController;
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

// Início Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Fim Breeze

// Início CRUD

Route::get('/', [AgendamentosController::class,'index'])->name('index-view');

Route::get('/welcome', [AgendamentosController::class,'welcome'])->name('welcome-view');

Route::get('/consulta', [AgendamentosController::class,'consulta'])->name('consulta-view');

Route::post('adicionar-agendamento',[AgendamentosController::class,'create'])->name('create-db');

Route::get('/read/{id}',[AgendamentosController::class,'readOne'])->name('read-db');

Route::post('/update',[AgendamentosController::class,'update'])->name('update-db');

Route::get('/delete/{id}',[AgendamentosController::class,'delete'])->name('delete-db');

// Fim CRUD
