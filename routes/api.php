<?php 

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//lamps
Route::get('/lamps', [App\Http\Controllers\Api\LampController::class, 'index']);

//update lamp
Route::post('/lamps/{id}', [App\Http\Controllers\Api\LampController::class, 'updateLamp']);



?>