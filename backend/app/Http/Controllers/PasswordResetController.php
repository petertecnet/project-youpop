<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordResetController extends Controller
{
    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required',
        ]);

        $response = Password::reset($request->only(
            'email', 'password', 'password_confirmation', 'token'
        ), function ($user, $password) {
            // Atualize a senha do usuário no banco de dados
            $user->password = bcrypt($password);
            $user->save();
        });

        if ($response == Password::PASSWORD_RESET) {
            // Redefinição de senha bem-sucedida
            // Retorne uma resposta adequada, como uma mensagem de sucesso ou redirecionamento
        } else {
            // Redefinição de senha falhou
            // Retorne uma resposta adequada, como uma mensagem de erro
        }
    }
}
