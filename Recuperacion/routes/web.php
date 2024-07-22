<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadoHabilidadController;
use App\Models\Departamento;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('departamento/listar',[DepartamentoController::class,'index'])->name('departamento.index');
Route::get('departamento/create',[DepartamentoController::class,'create']);
Route::post('departamento/store', [DepartamentoController::class,'store'])->name('departamentos.store');
Route::get('departamento/{departamento}',[DepartamentoController::class,'show'])->name('departamento.show');
Route::put('departamento/{departamento}',[DepartamentoController::class,'update'])->name('departamento.update');
Route::delete('departamento/{departamento}',[DepartamentoController::class,'destroy'])->name('departamento.destroy');
Route::get('departamento/{departamento}/editar',[DepartamentoController::class,'edit'])->name('departamento.edit');

Route::get('empleado/asociar_habilidad',[EmpleadoHabilidadController::class,'asociar']);
Route::post('empleado/asociar_habilidad/store',[EmpleadoHabilidadController::class,'store'])->name('empleado_habilidad.store');

