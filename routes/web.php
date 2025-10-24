<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\LampController::class, 'index'])->name('lamps.index');

//update lamp
Route::post('/lamps/{id}', [App\Http\Controllers\LampController::class, 'updateLamp'])->name('lamps.update');

//histories
Route::get('/histories', [App\Http\Controllers\HistoryController::class, 'index'])->name('histories.index');