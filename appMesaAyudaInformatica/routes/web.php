<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('puestos', App\Http\Controllers\PuestoController::class);
Route::resource('problemas', App\Http\Controllers\ProblemaController::class);
Route::resource('empleados', App\Http\Controllers\EmpleadoController::class);
Route::resource('responsabilidads', App\Http\Controllers\ResponsabilidadController::class);
Route::resource('asignacions', App\Http\Controllers\AsignacionController::class);
Route::resource('secuencia', App\Http\Controllers\SecuenciumController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
