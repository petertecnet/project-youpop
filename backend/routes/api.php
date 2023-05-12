<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Rotas protegidas que exigem autenticação
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']); 
    Route::get('/check-authentication', [AuthController::class, 'checkAuthentication']);

});

// Rota para gerar link de redefinição de senha
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);

// Rota para redefinir a senha
Route::post('/reset-password', [AuthController::class, 'resetPassword']);
