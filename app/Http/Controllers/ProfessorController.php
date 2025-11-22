<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Se precisar de autenticação

class ProfessorController extends Controller
{
    /**
     * Exibe o Dashboard principal do Professor.
     * Rota: professor.dashboard
     */
    public function dashboard()
    {
        // Aqui você faria a lógica para buscar dados reais (alunos, turmas, estatísticas)

        // Retorna o Blade que criamos (resources/views/professor/dashboard.blade.php)
        return view('professor.dashboard');
    }

    /**
     * Exibe a página 'Sobre Mim' do Professor (Simplesmente retorna a view)
     * Rota: professor.sobre-mim
     */
    public function sobreMim()
    {
        // Retorna o Blade (resources/views/professor/sobre-mim.blade.php)
        return view('professor.sobre-mim');
    }
}
