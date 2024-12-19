<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThesisController;


Route::get('/', [ThesisController::class, 'index'])->name('home');
Route::get('/theses/create', [ThesisController::class, 'create'])->name('create');
Route::delete('/theses/{id}', [ThesisController::class, 'destroy'])->name('destroy');
Route::post('/theses', [ThesisController::class, 'store'])->name('store');
Route::get('/theses/{id}/edit', [ThesisController::class, 'edit'])->name('edit');
Route::put('/theses/{id}', [ThesisController::class, 'update'])->name('update');