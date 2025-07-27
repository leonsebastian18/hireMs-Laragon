<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\CandidateController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Agrega esta ruta para tus APIs de Candidate
Route::apiResource('candidates', CandidateController::class);

