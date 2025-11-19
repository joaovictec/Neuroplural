<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Exibe o formulário de login.
     */
    public function mostrarForm()
    {
        return view('auth.login');
    }

    /**
     * Processa a tentativa de login.
     */
    public function login(Request $request)
    {
        // Validação simples (opcional mas recomendado)
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Tenta autenticar
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard'); // rota protegida
        }

        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
        ]);
    }
}
