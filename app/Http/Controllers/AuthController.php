<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
     public function mostrarForm()
    {
        return view('auth.login');
    }

    // Processar o login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = DB::table('usuarios')->where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Credenciais inválidas']);
        }

        // Se o login for bem-sucedido, armazene o ID na sessão
        Session::put('usuario_id', $user->id);

        // ✅ LÓGICA DE REDIRECIONAMENTO CONDICIONAL
        // Você precisará garantir que o objeto $user possui a coluna 'is_admin'
        if (isset($user->is_admin) && $user->is_admin) {
            // Se for administrador, redireciona para o dashboard admin
            return redirect()->route('admin.dashboard');
        } else {
            // Se for um usuário normal (aluno), redireciona para o dashboard do aluno
            return redirect()->route('aluno.dashboard');
        }
    }


public function register(Request $request)
{
    $request->validate([
        'name' => 'required|min:3',
        'email' => 'required|email|unique:usuarios,email',
        'password' => 'required|min:6'
    ]);

    DB::table('usuarios')->insert([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'created_at' => now(),
        'updated_at' => now()
    ]);

    return redirect()->route('auth.login.view')
                     ->with('success', 'Conta criada com sucesso! Faça login.');
}

}

