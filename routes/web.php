<?php

use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('paciente/', [PacienteController::class, 'index'])->name('paciente.index');
Route::get('paciente/create', [PacienteController::class, 'create'])->name('paciente.create');
Route::get('paciente/edit/{id}', [PacienteController::class, 'edit'])->name('paciente.edit');
Route::put('paciente/{id}', [PacienteController::class, 'update'])->name('paciente.update');
Route::delete('paciente/{id}', [PacienteController::class, 'destroy'])->name('paciente.destroy');
Route::get('paciente/{id}', [PacienteController::class, 'show'])->name('paciente.show');
Route::post('paciente/store', [PacienteController::class, 'store'])->name('paciente.store');

Route::get('medico/', [MedicoController::class, 'index'])->name('medico.index');
Route::get('medico/create', [MedicoController::class, 'create'])->name('medico.create');
Route::get('medico/edit/{id}', [MedicoController::class, 'edit'])->name('medico.edit');
Route::put('medico/{id}', [MedicoController::class, 'update'])->name('medico.update');
Route::delete('medico/{id}', [MedicoController::class, 'destroy'])->name('medico.destroy');
Route::get('medico/{id}', [MedicoController::class, 'show'])->name('medico.show');
Route::post('medico/store', [MedicoController::class, 'store'])->name('medico.store');

Route::get('consulta/', [ConsultaController::class, 'index'])->name('consulta.index');
Route::get('consulta/create', [ConsultaController::class, 'create'])->name('consulta.create');
Route::get('consulta/edit/{id}', [ConsultaController::class, 'edit'])->name('consulta.edit');
Route::put('consulta/{id}', [ConsultaController::class, 'update'])->name('consulta.update');
Route::delete('consulta/{id}', [ConsultaController::class, 'destroy'])->name('consulta.destroy');
Route::get('consulta/{id}', [ConsultaController::class, 'show'])->name('consulta.show');
Route::post('consulta/store', [ConsultaController::class, 'store'])->name('consulta.store');

Route::get('especialidade/', [EspecialidadeController::class, 'index'])->name('especialidade.index');
Route::get('especialidade/create', [EspecialidadeController::class, 'create'])->name('especialidade.create');
Route::get('especialidade/edit/{id}', EspecialidadeController::class, 'edit'])->name('especialidade.edit');
Route::put('especialidade/{id}', [EspecialidadeController::class, 'update'])->name('especialidade.update');
Route::delete('especialidade/{id}', [EspecialidadeController::class, 'destroy'])->name('especialidade.destroy');
Route::get('especialidade/{id}', [EspecialidadeController::class, 'show'])->name('especialidade.show');
Route::post('especialidade/store', [EspecialidadeController::class, 'store'])->name('especialidade.store');



