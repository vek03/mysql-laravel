<?php

use App\Models\Agendamentos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentosController;

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

Route::get('/', [AgendamentosController::class, 'index'])->name('index');

Route::post('/agendamento/create', [AgendamentosController::class, 'create'])->name('create_agendamento');

Route::get('/agendamento/read', [AgendamentosController::class, 'read'])->name('read_agendamentos');

Route::get('/agendamento/{id}', [AgendamentosController::class, 'selectAgend'])->name('select_agendamento');

Route::post('/agendamento/update', [AgendamentosController::class, 'update'])->name('update_agendamento');

Route::get('/agendamento/delete/{id}', [AgendamentosController::class, 'delete'])->name('delete_agendamento');
