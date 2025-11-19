<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = DB::table('usuarios')->where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->senha)) {
            return back()->withErrors(['email' => 'Credenciais inválidas']);
        }

        Session::put('usuario_id', $user->id);

        return redirect('/dashboard');
    }
    public function showLogin()
{
    return view('auth.login'); // <- seu arquivo está aqui
}
}
