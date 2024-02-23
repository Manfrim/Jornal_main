<?php

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

Route::get('', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/escritores', [\App\Http\Controllers\EscritorController::class, 'escritor'])->name('site.escritor');
Route::get('/materia/{id?}', [\App\Http\Controllers\LerMateriaController::class, 'LerMateria'])->name('site.lermateria');
