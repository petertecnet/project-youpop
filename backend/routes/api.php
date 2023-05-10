<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController;

// Rota de autenticação
Route::post('/login', [AuthController::class, 'login']);

// Rota de registro
Route::post('/register', [AuthController::class, 'register']);

// Rota de recuperação de senha
Route::post('/password/reset', [PasswordResetController::class, 'reset']);

// Rotas protegidas que requerem autenticação
Route::middleware('auth:api')->group(function () {
    // Rota de logout
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // Outras rotas protegidas...
});
